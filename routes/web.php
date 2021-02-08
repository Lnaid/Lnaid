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

// Guest Routes
Route::group(['middleware'=>['web', 'guest'], 'namespace' => 'App\Http\Controllers'], function(){

	Route::get('/test-sponsor', function () {
    	return view('dashboard.sponsor.index');
	});

	Route::get('/test-admin', function () {
    	return view('dashboard.admin.index');
	});

	Route::get('/test-student', function () {
    	return view('dashboard.student.index');
	});

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
	Route::get('/dashboard', function(){
		return view('dashboard.student.index');
	})->name('student.index');
});




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard/student/index');
})->name('dashboard.student.index');
