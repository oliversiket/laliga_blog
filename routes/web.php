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

$vueBootstrap = function () {
    return view('vue-bootstrap');
};

Route::get('/', $vueBootstrap);

Auth::routes();

Route::prefix('admin')->group(function() {
    $bootstrap = 'PageController@index';

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/home', $bootstrap)->name('admin.index');
});

