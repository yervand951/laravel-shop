<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::auth();
//


Route::group(['prefix'=>'admin', 'as' => 'admin.', 'middleware'=>['role:admin','web']],function(){
    Route::resource('/prtype', 'ProductTypeController');
    Route::get('/prtype/edit/{id}', 'ProductTypeController@edit');
    Route::get('/prtype/delete/{id}', 'ProductTypeController@destroy');
    Route::resource('/product', 'ProductController');
    Route::post('/product/data', ['as' => 'product.data', 'uses' => 'ProductController@data']);
});

Route::group(['prefix'=>'user', 'as' => 'user.', 'namespace' => 'User', 'middleware'=>['role:admin|user','web']],function(){

    Route::resource('/product', 'ProductController');
    Route::post('/product/data', ['as' => 'product.data', 'uses' => 'ProductController@data']);
    Route::resource('/', 'UserController');
});

