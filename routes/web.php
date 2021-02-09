<?php

use Illuminate\Support\Facades\Route;

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

// Test Routes
Route::group(['middleware' => ['web']], function(){
	Route::get('/test-sponsor', function () {
    	return view('dashboard.sponsor.unused');
	});

	Route::get('/test-admin', function () {
    	return view('dashboard.admin.unused');
	});

	Route::get('/test-student', function () {
		$data['title'] = 'Dashboard';
    	return view('dashboard.student.unused', $data);
	});
});

// Guest Routes
Route::group(['middleware'=>['web', 'guest'], 'namespace' => 'App\Http\Controllers'], function(){
	Route::get('/', function () {
    	return view('pages.index');
	});
	Route::get('/signup-sponsor', 'AuthController@createSponsor')->name('signup.sponsor');
	Route::get('/signup-alumni', 'AuthController@createAlumni')->name('signup.alumni');
	Route::get('/signup-student', 'AuthController@createStudent')->name('signup.student');

	Route::post('/signup-sponsor', 'AuthController@storeSponsor')->name('store.sponsor');

	// Route::post('/signin', 'AuthController@signIn')->name('signin.store');
	// Route::post('/signup', 'AuthController@signup')->name('signup.store');
});

Route::group(['prefix' => 'student', 'namespace' => 'App\Http\Controllers'], function(){
	Route::get('/overview', 'StudentController@overview')->name('student.index');
	Route::get('/profile', 'StudentController@profile')->name('student.profile');
	Route::get('/verification', 'StudentController@verification')->name('student.verification');
	Route::get('/fund-request', 'StudentController@fundRequest')->name('student.fund-request');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
	$data['title'] = 'Dashboard';
    return view('dashboard/student/index', $data);
})->name('dashboard.student.index');




// ADMIN ENDPOINTS GROUP
Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers', 'middleware' => ['auth:sanctum', 'admin']], function () {

    /** RBAC
     * RBAC Endpoints
     */

    //get all roles
    Route::get('/rbac/roles', 'Admin\RbacController@getRoles');
    //get single role and its abilities
    Route::get('/rbac/roles/{roleName?}', 'Admin\RbacController@getSingleRole');
    //get all abilities
    Route::get('/rbac/abilities', 'Admin\RbacController@getAbilities');
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

    // School CRUD
    Route::post('school/{id}', 'Api\SchoolController@update');
    Route::resource('schools', 'Api\SchoolController');
});
