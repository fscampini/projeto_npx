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

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
    'test' => 'TestController'
]);


Route::group(['middleware' => 'auth'], function()
{
    Route::get('/', function () {
        return view('app');
    });

    Route::group(['prefix'=>'documents', 'where' => ['id'=> '[0-9]+']], function()
    {
        Route::get('upload_documents', ['as'=>'documents.upload_documents',  function(){
            return view('documents.upload_documents');
        }]);
        Route::post('upload',['as'=>'documents.upload', 'uses'=>'DocumentController@post_upload']);
        Route::get('monitor',['as'=>'documents.monitor', 'uses'=>'DocumentController@monitor']);
    });
});


