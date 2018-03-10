<?php

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

// USER
Route::get('/', 'Web\PageController@home')->name('home');
Route::get('/login', 'Web\PageController@login')->name('login');
Route::get('/register', 'Web\PageController@register')->name('register');
Route::get('/register/confirmation/{code}', 'Auth\AuthController@confirmation')->name('confirmation');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@resetPasswordForm')->name('password.reset');
Route::get('/password/reset', 'Auth\ForgotPasswordController@linkRequestForm')->name('password.request');

Route::post('login', 'Auth\AuthController@login');
Route::post('register', 'Auth\RegisterController@register');
Route::post('login-facebook', 'Auth\AuthController@loginFacebook');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', 'Web\PageController@dashboard')->name('dashboard');
    Route::get('/settings', 'Web\PageController@settings')->name('settings');
    Route::get('/settings/profile', 'Web\PageController@settingsProfile')->name('settings.profile');

    Route::put('users/settings-profile', 'Web\UserController@updateSettingsProfile');
    Route::post('users/avatar-upload', 'Web\UserController@avatarUpload');
    Route::put('users/password', 'Web\UserController@updatePassword');

    Route::post('logout', 'Auth\AuthController@logout');

});

// ADMIN
Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin'], function () {
        Route::get('/dashboard', 'Admin\PageController@dashboard')->name('admin.dashboard');

        Route::get('/users/{id}', 'Admin\PageController@user')->name('admin.user');
        Route::get('/users', 'Admin\PageController@users')->name('admin.users');
        Route::post('users', 'Admin\UserController@store');
        Route::put('users/{id}', 'Admin\UserController@update');
        Route::delete('users/{id}', 'Admin\UserController@delete');
        Route::post('users/avatar-upload', 'Admin\UserController@avatarUpload');

    });
});

