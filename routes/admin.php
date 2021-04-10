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

//Route::get('listall','accountController@listall')->name('hihi')->middleware('adminLogin');

//Route::group(['prefix' => 'admin', 'middleware' =>'adminLogin'], function () {
Route::group(['prefix' => 'admin'], function () {

    Route::group(['prefix' => 'account'], function() {

        Route::get('listall','accountController@listall');

        Route::get('update/{idaccount}','accountController@update');
        Route::post('update/{idaccount}','accountController@postupdate');

        Route::get('create','accountController@create');
        Route::post('create','accountController@postcreate');

        Route::get('delete/{idaccount}','accountController@delete');

    });
    Route::group(['prefix' => 'level'], function() {

        Route::get('listall','levelController@listall');

        Route::get('update/{idlevel}','levelController@update');
        Route::post('update/{idlevel}','levelController@postupdate');

        Route::get('create','levelController@create');
        Route::post('create','levelController@postcreate');

        Route::get('delete/{idlevel}','levelController@delete');


    });
    Route::group(['prefix' => 'category'], function() {

        Route::get('listall','categoryController@listall');

        Route::get('update/{idcategory}','categoryController@update');
        Route::post('update/{idcategory}','categoryController@postupdate');

        Route::get('create','categoryController@create');
        Route::post('create','categoryController@postcreate');

        Route::get('delete/{idcategory}','categoryController@delete');

    });
    Route::group(['prefix' => 'course'], function() {

        Route::get('listall','courseController@listall');

        Route::get('create','courseController@create');
        Route::post('create','courseController@postcreate');

        Route::get('update/{idkh}','courseController@update');
        Route::post('update/{idkh}','courseController@postupdate');

        Route::get('delete/{idkh}','courseController@delete');

    });
    Route::group(['prefix' => 'comment'], function() {

        Route::get('delete/{idcomment}/{idkh}','commentController@delete');

    });


    Route::group(['prefix' => 'ajax'], function() {

        Route::get('level/{idlevel}','ajaxController@getlevel');

    });



    Route::get('index','thongkeController@index');





});

//Route::get('admin/index','thongkeController@index');





