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

Route::pattern('id', '[0-9]+');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
    'test' => 'TestController'
]);

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/', ['uses' => 'DocumentController@index']);

    Route::group(['prefix'=>'admin', 'middleware' => 'admin'], function(){
        Route::group(['prefix' => 'user'], function(){
           Route::get('{id}/details', ['as' => 'admin.user.details', 'uses' => 'AccessControlController@details']);
        });

        Route::get('/teste', ['uses' => 'DocumentController@monitor']);

        Route::get('/', function () {
            return view('users.user_details');
        });
    });

    Route::group(['prefix'=>'superuser', 'middleware' => 'superuser'], function(){
        Route::group(['prefix' => 'menu'], function(){
            Route::get('/', ['as' => 'superuser.menu.index', 'uses' => 'MenuController@index']);
            Route::get('/create', ['as' => 'superuser.menu.create', 'uses' => 'MenuController@create']);
            Route::post('/store', ['as' => 'superuser.menu.store', 'uses' => 'MenuController@store']);
            Route::get('{id}/edit', ['as' => 'superuser.menu.edit', 'uses' => 'MenuController@edit']);
            Route::put('{id}/update', ['as' => 'superuser.menu.update', 'uses' => 'MenuController@update']);
            Route::get('{id}/destroy', ['as' => 'superuser.menu.destroy', 'uses' => 'MenuController@destroy']);
            Route::get('{id}/submenu', ['as' => 'superuser.menu.submenu.index', 'uses' => 'MenuController@submenuIndex']);
        });
        Route::group(['prefix' => 'action_code'], function(){
            Route::get('/', ['as' => 'superuser.action_code.index', 'uses' => 'ActionCodeController@index']);
            Route::get('/create', ['as' => 'superuser.action_code.create', 'uses' => 'ActionCodeController@create']);
            Route::post('/store', ['as' => 'superuser.action_code.store', 'uses' => 'ActionCodeController@store']);
            Route::get('{id}/edit', ['as' => 'superuser.action_code.edit', 'uses' => 'ActionCodeController@edit']);
            Route::put('{id}/update', ['as' => 'superuser.action_code.update', 'uses' => 'ActionCodeController@update']);
            Route::get('{id}/destroy', ['as' => 'superuser.action_code.destroy', 'uses' => 'ActionCodeController@destroy']);
        });
    });

    Route::group(['prefix'=>'documents'], function()
    {
        Route::get('upload_documents', ['as'=>'documents.upload_documents', 'uses' => 'DocumentController@index']);
        Route::post('upload',['as'=>'documents.upload', 'uses'=>'DocumentController@post_upload']);
        Route::get('monitor',['as'=>'documents.monitor', 'uses'=>'DocumentController@monitor']);
        Route::get('{id}/history', ['as'=> 'document.history', 'uses' => 'DocumentController@document_history']);
    });
});


