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
use App\Http\Controllers\Tbl72190326Controller;
use App\Http\Controllers\SalamController;

Route::get('/get-a', 'GetAController@index')->name('get-a');
Route::get('/get-b', 'GetBController@index')->name('get-b');
Route::get('/post-a', 'PostAController@index')->name('post-a');
Route::post('/post-b', 'PostBController@index')->name('post-b');

Route::get('/index', [Tbl72190326Controller::class, 'index'])->name('index');

Route::get('/salam', [SalamController::class, 'salam']);

Route::get('/', function () {
    return view('welcome');
});
