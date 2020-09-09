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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function(){

    Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard');
    Route::get('/dashboard/movie', 'Dashboard\MovieController@index')->name('dashboard.movie');
    Route::get('/dashboard/theater', 'Dashboard\TheaterController@index')->name('dashboard.theater');
    Route::get('/dashboard/ticket', 'Dashboard\TicketController@index')->name('dashboard.ticket');

    //Users
    Route::get('/dashboard/users', 'Dashboard\UserController@index')->name('dashboard.users');
    Route::get('/dashboard/users/edit/{id}', 'Dashboard\UserController@edit')->name('dashboard.user.edit');
    Route::put('/dashboard/users/update/{id}', 'Dashboard\UserController@update')->name('dashboard.user.update');
    Route::delete('/dashboard/users/delete/{id}', 'Dashboard\UserController@destroy')->name('dashboard.user.delete');

});