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
	Route::get('/dashboard', function(){
		$data['title'] = 'Dashboard';
    	return view('dashboard/student/index', $data);
	})->name('student.dashboard')->middleware('verified');
	Route::get('/overview', 'StudentController@overview')->name('student.index');
	Route::get('/profile', 'StudentController@profile')->name('student.profile');
	Route::get('/verification', 'StudentController@verification')->name('student.verification');
	Route::get('/fund-request', 'StudentController@fundRequest')->name('student.fund-request');
	Route::get('/chat', 'StudentController@chat')->name('student.chat');
});


// Sponsor Routes
Route::group(['prefix' => 'sponsor', 'middleware' => ['auth:sanctum',  /*'sponsor' */ ], 'namespace' => 'App\Http\Controllers'], function(){
	Route::get('/test', function () {
    	return view('dashboard.sponsor.unused');
	});

	Route::get('/', function () {
		$data['title'] = 'Dashboard';
    	return view('dashboard.sponsor.index', $data);
	});

	Route::get('/requests', function () {
		$data['title'] = 'Dashboard';
    	return view('dashboard.sponsor.request-index', $data);
	});

	Route::get('/requests/12', function () {
		$data['title'] = 'Dashboard';
    	return view('dashboard.sponsor.request-single', $data);
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
    Route::post('/rbac/attach', 'Admin\RbacController@attachAbilityToRole');
    // Assign role to a user (body: userId and roleName)
    Route::post('/rbac/assign', 'Admin\RbacController@assignUserRole');
    // Retract role from user  (body: userID and roleName)
    Route::post('/rbac/retract', 'Admin\RbacController@retractUserRole');
    // Get user roles
    Route::get('/rbac/user/{userId?}/roles', 'Admin\RbacController@getUserRoles');
    // Get user abilities
    Route::get('/rbac/user/{userId?}/abilities', 'Admin\RbacController@getUserAbilities');
    // create  new  role
    Route::post('/rbac/create/role', 'Admin\RbacController@storeRole');
    // create new ability
    Route::post('/rbac/create/ability', 'Admin\RbacController@storeAbility');
});
