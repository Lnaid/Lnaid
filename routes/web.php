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
Route::group(['middleware'=>['web', 'guest'], 'namespace' => 'App\Http\Controllers\Auth'], function(){
	Route::get('/', function () {
    	return view('pages.index');
	});

	Route::get('/signup-sponsor', function(){
		return view('auth.sponsor-signup');
	})->name('signup.sponsor');

	Route::get('/signup-alumni', function(){
		return view('auth.student-signup2');
	})->name('signup.alumni');

	Route::get('/signup-student', function(){
		return view('auth.student-signup');
	})->name('signup.student');

	// Route::get('/signin', 'AuthController@signInForm')->name('signin');
	// Route::post('/signin', 'AuthController@signIn')->name('signin.store');
	// Route::post('/signup', 'AuthController@signup')->name('signup.store');
});




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard/student/index');
})->name('dashboard.student.index');
