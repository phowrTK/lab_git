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
use App\account;
use App\comment;
use App\level;
use App\category;
use App\course;
require_once 'admin.php';
require_once 'user.php';

Route::get('user/login','accountController@loginuser');
Route::post('user/login','accountController@postloginuser');

Route::get('admin/login','accountController@login');
Route::post('admin/login','accountController@postlogin');

Route::get('admin/logout','accountController@logout');


