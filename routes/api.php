<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Guest 
Route::group([ 'middleware' => ['json.response', 'guest'], 'namespace' => 'App\Http\Controllers' ], function () {
    Route::post('/register', 'Api\AuthController@register')->name('api.register');
    Route::post('/login', 'Api\AuthController@login')->name('api.login');
    // Route::post('/auth/social', 'Api\SocialAuthController@oauth')->name('social_auth');
    // Route::post('/password/reset/token', 'Auth\ResetPasswordController@reset');
    // Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    // Route::get('invites/accept/{token}', 'Api\InviteController@acceptInvitation')->name('invite.accept');
    // Route::get('countries', 'CountriesController@index')->name('countries');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::group(['prefix' => 'v1'], function(){
	Route::get('/test', function(){
		return 'test request';
	});
});


