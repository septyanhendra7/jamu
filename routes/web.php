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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/','App\Http\Controllers\HomeController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('pesan/{id}','App\Http\Controllers\PesanController@index');
Route::post('pesan/{id}','App\Http\Controllers\PesanController@pesan');
Route::get('check-out','App\Http\Controllers\PesanController@check_out');
Route::delete('check-out/{id}','App\Http\Controllers\PesanController@delete');

Route::get('konfirmasi-check-out', 'App\Http\Controllers\PesanController@konfirmasi');

Route::get('profile', 'App\Http\Controllers\ProfileController@index');
Route::post('profile', 'App\Http\Controllers\ProfileController@update');

Route::get('history', 'App\Http\Controllers\HistoryController@index');
Route::get('history/{id}', 'App\Http\Controllers\HistoryController@detail');

Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::get('/admin-login', 'App\Http\Controllers\Auth\AdminLoginController@showLoginForm');
Route::post('admin-login',['as'=>'admin-login','uses'=>'App\Http\Controllers\Auth\AdminLoginController@Login']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
