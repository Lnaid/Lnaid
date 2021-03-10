<?php

use Illuminate\Support\Facades\Route;
use Silber\Bouncer\BouncerFacade as Bouncer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Guest Routes
Route::group(['middleware'=>['web', 'guest'], 'namespace' => 'App\Http\Controllers'], function(){
	Route::get('/signup-sponsor', 'AuthController@createSponsor')->name('signup.sponsor');
	Route::get('/signup-student', 'AuthController@createStudent')->name('signup.student');

	Route::post('/signup-student', 'AuthController@storeStudent')->name('store.student');
	Route::post('/signup-sponsor', 'AuthController@storeSponsor')->name('store.sponsor');
	// Route::post('/signin', 'AuthController@signIn')->name('signin.store');
	// Route::post('/signup', 'AuthController@signup')->name('signup.store');
});


// WEB Routes
Route::group(['middleware' => ['web']], function(){
	Route::get('/', function () {
    	return view('pages.index');
	});

	Route::get('/testboard', function () {
    	return view('dashboard.default');
	});

	Route::get('/test-ajax', function(){
		session()->put('success', 'hmmm');
		session()->save();
		return;
	});
});

// Dashboard gracefull Redirects
Route::group(['middleware' =>['web', 'auth']], function(){
	Route::get('/dashboard', function(){
		$user = request()->user();
	  	if(Bouncer::is($user)->a('admin')){
	     	return redirect()->route('admin.dashboard');
	   	} elseif(Bouncer::is($user)->a('sponsor')){
	      	return redirect()->route('sponsor.dashboard');
	 	}elseif(Bouncer::is($user)->a('student')){
	      	return redirect()->route('student.dashboard');
	 	}else{
	     	return redirect()->back()->with('error', 'Prohibited');
	    }
	})->name('dashboard');
});


// STUDENT Routes
Route::group(['prefix' => 'student', 'middleware' => ['auth:sanctum',  'student' ], 'namespace' => 'App\Http\Controllers'], function(){
	Route::get('/', 'StudentController@overview')->name('student.dashboard')->middleware('verified');
	Route::get('/overview', 'StudentController@overview')->name('student.index');
	Route::get('/profile', 'StudentController@profile')->name('student.profile');
	Route::get('/verification', 'StudentController@verification')->name('student.verification');
	Route::post('/verification/step/1', 'StudentController@verifyStep1')->name('student.verify.step1');
	Route::post('/verification/step/2', 'StudentController@verifyStep2')->name('student.verify.step2');
	Route::post('/verification/step/3', 'StudentController@verifyStep3')->name('student.verify.step3');
	Route::get('/fund-request', 'StudentController@fundRequest')->name('student.fund-request');
	Route::post('/fund-request/create', 'StudentController@fundRequestPost')->name('student.fund.create');
	Route::get('/fund-request/{id}/delete', 'StudentController@fundRequestDelete')->name('student.fund.delete');
	Route::post('/fund-request/{id}/edit', 'StudentController@fundRequestEdit')->name('student.fund.edit');
	Route::post('/profile/edit', 'StudentController@editProfile')->name('student.profile.edit');
	Route::get('/chat', 'StudentController@chat')->name('student.chat');
	Route::get('/chat/search', 'StudentController@chatSearch')->name('student.chat.search');
	Route::get('/chat/{id}/create', 'StudentController@chatCreate')->name('student.chat.create');
	Route::get('/chat/{id}/thread', 'StudentController@chatThread')->name('student.chat.thread');
	Route::post('/chat/thread/{id}/reply', 'StudentController@chatThreadReply')->name('student.chat.thread.reply');
	Route::get('/logout', 'StudentController@logout')->name('student.signout');
});


// Sponsor Routes
Route::group(['prefix' => 'sponsor', 'middleware' => ['auth:sanctum',  /*'sponsor' */ ], 'namespace' => 'App\Http\Controllers'], function(){
	// Route::get('/test', function () {
 //    	return view('dashboard.sponsor.unused');
	// });
	Route::get('/', 'SponsorController@index' )->name('sponsor.dashboard');
	Route::get('/requests', 'SponsorController@allRequest')->name('sponsor.request');
	Route::get('/requests/{id}','SponsorController@singleRequest' )->name('sponsor.request-single');

	Route::get('/req', function(){
		$requests = App\Models\Request::find(9);
		dd($requests->student->school);
	});
});


// Donation and Payments Routes
Route::group(['prefix' => 'donations', 'middleware' => ['auth:sanctum',  /*'sponsor' */ ], 'namespace' => 'App\Http\Controllers'], function(){

	// via Paystack
	Route::post('/pay/paystack', 'PaystackController@redirectToGateway')->name('donations.pay.paystack');

	// via Flutterwave rave
	Route::post('/pay/rave', 'RaveController@initialize')->name('donations.pay.rave');
	Route::get('/rave/callback', 'RaveController@callback')->name('rave.callback');

	Route::get('confirmed', 'DonationController@sayThanks' )->name('donations.confirmed');

	Route::get('/customers', function(){
		return App\Helpers\fxExchange::dollarToNaira(566);
	});
});


// ADMIN ENDPOINTS GROUP
Route::group(['prefix' => 'admin',  'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth:sanctum', /*'admin' */]], function () {

	Route::get('/test', function () {
    	return view('dashboard.admin.unused');
	});

// RBAC
    //get all roles
    Route::get('/rbac/roles', 'RbacController@getRoles');
    //get single role and its abilities
    Route::get('/rbac/roles/{roleName?}', 'RbacController@getSingleRole');
    //get all abilities
    Route::get('/rbac/abilities', 'RbacController@getAbilities');
    // Attach Ability to Role (body: abilityName and roleName)
    Route::post('/rbac/attach', 'RbacController@attachAbilityToRole');
    // Assign role to a user (body: userId and roleName)
    Route::post('/rbac/assign', 'RbacController@assignUserRole');
    // Retract role from user  (body: userID and roleName)
    Route::post('/rbac/retract', 'RbacController@retractUserRole');
    // Get user roles
    Route::get('/rbac/user/{userId?}/roles', 'RbacController@getUserRoles');
    // Get user abilities
    Route::get('/rbac/user/{userId?}/abilities', 'RbacController@getUserAbilities');
    // create  new  role
    Route::post('/rbac/create/role', 'RbacController@storeRole');
    // create new ability
    Route::post('/rbac/create/ability', 'RbacController@storeAbility');
});
