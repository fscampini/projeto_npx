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


Route::group(['middleware' => ['web','auth']], function()
{
    Route::get('/', ['uses' => 'DocumentController@index']);

    Route::group(['prefix'=>'admin'], function(){
        Route::group(['prefix' => 'user'], function(){

            Route::get('/', ['as' => 'admin.user.index', 'access' => 'acl-admin-user', 'uses' => 'UserController@index']);
            Route::get('/create', ['as' => 'admin.user.create', 'access' => 'acl-admin-user', 'uses' => 'UserController@create']);
            Route::post('/store', ['as' => 'admin.user.store', 'access' => 'acl-admin-user', 'uses' => 'UserController@store']);
            Route::get('{id}/edit', ['as' => 'admin.user.edit', 'access' => 'acl-admin-user', 'uses' => 'UserController@edit']);
            Route::put('{id}/update', ['as' => 'admin.user.update', 'access' => 'acl-admin-user', 'uses' => 'UserController@update']);
            Route::get('{id}/destroy', ['as' => 'admin.user.destroy', 'access' => 'acl-admin-user', 'uses' => 'UserController@destroy']);
            
            Route::post('attach', ['as' => 'admin.user.attach', 'access' => '', 'uses' => 'UserController@attach']);
        });
    });

    Route::group(['prefix'=>'superuser', 'middleware' => ['access']], function(){
        Route::group(['prefix' => 'menu'], function(){
            Route::get('/', ['as' => 'superuser.menu.index', 'access' => 'acl-superuser-menu', 'uses' => 'MenuController@index']);
            Route::get('/create', ['as' => 'superuser.menu.create', 'access' => 'acl-superuser-menu', 'uses' => 'MenuController@create']);
            Route::post('/store', ['as' => 'superuser.menu.store', 'access' => 'acl-superuser-menu', 'uses' => 'MenuController@store']);
            Route::get('{id}/edit', ['as' => 'superuser.menu.edit', 'access' => 'acl-superuser-menu', 'uses' => 'MenuController@edit']);
            Route::put('{id}/update', ['as' => 'superuser.menu.update', 'access' => 'acl-superuser-menu', 'uses' => 'MenuController@update']);
            Route::get('{id}/destroy', ['as' => 'superuser.menu.destroy', 'access' => 'acl-superuser-menu', 'uses' => 'MenuController@destroy']);
            Route::get('{id}/submenu', ['as' => 'superuser.menu.submenu.index', 'access' => 'acl-superuser-menu', 'uses' => 'MenuController@submenuIndex']);
        });
        Route::group(['prefix' => 'action_code'], function(){
            Route::get('/', ['as' => 'superuser.action_code.index', 'access' => '', 'uses' => 'ActionCodeController@index']);
            Route::get('/create', ['as' => 'superuser.action_code.create', 'access' => '', 'uses' => 'ActionCodeController@create']);
            Route::post('/store', ['as' => 'superuser.action_code.store', 'access' => '', 'uses' => 'ActionCodeController@store']);
            Route::get('{id}/edit', ['as' => 'superuser.action_code.edit', 'access' => '', 'uses' => 'ActionCodeController@edit']);
            Route::put('{id}/update', ['as' => 'superuser.action_code.update', 'access' => '', 'uses' => 'ActionCodeController@update']);
            Route::get('{id}/destroy', ['as' => 'superuser.action_code.destroy', 'access' => '', 'uses' => 'ActionCodeController@destroy']);
        });
        Route::group(['prefix' => 'role'], function(){
            Route::get('/', ['as' => 'superuser.role.index', 'access' => '', 'uses' => 'RoleController@index']);
            Route::get('/create', ['as' => 'superuser.role.create', 'access' => '', 'uses' => 'RoleController@create']);
            Route::post('/store', ['as' => 'superuser.role.store', 'access' => '', 'uses' => 'RoleController@store']);
            Route::get('{id}/edit', ['as' => 'superuser.role.edit', 'access' => '', 'uses' => 'RoleController@edit']);
            Route::put('{id}/update', ['as' => 'superuser.role.update', 'access' => '', 'uses' => 'RoleController@update']);
            Route::get('{id}/destroy', ['as' => 'superuser.role.destroy', 'access' => '', 'uses' => 'RoleController@destroy']);

            Route::group(['prefix' => 'menu'], function(){
                Route::get('/{id}', ['as' => 'superuser.role.menu.index', 'access' => '', 'uses' => 'RoleController@roleMenuIndex']);
                Route::get('/MenuList', ['as' => 'superuser.role.menu.menulist', 'access' => '', 'uses' => 'RoleController@roleMenuList']);
                Route::post('/{id}', ['as' => 'superuser.role.menu.attach', 'access' => '', 'uses' => 'RoleController@roleMenuAttach']);
            });

        });
        Route::group(['prefix' => 'permission'], function(){
            Route::get('/', ['as' => 'superuser.permission.index', 'access' => '', 'uses' => 'PermissionController@index']);
            Route::get('/create', ['as' => 'superuser.permission.create', 'access' => '', 'uses' => 'PermissionController@create']);
            Route::post('/store', ['as' => 'superuser.permission.store', 'access' => '', 'uses' => 'PermissionController@store']);
            Route::get('{id}/edit', ['as' => 'superuser.permission.edit', 'access' => '', 'uses' => 'PermissionController@edit']);
            Route::put('{id}/update', ['as' => 'superuser.permission.update', 'access' => '', 'uses' => 'PermissionController@update']);
            Route::get('{id}/destroy', ['as' => 'superuser.permission.destroy', 'access' => '', 'uses' => 'PermissionController@destroy']);
        });

    });

    Route::group(['prefix'=>'documents'], function()
    {
        Route::get('upload_documents', ['as'=>'documents.upload_documents', 'access' => '', 'uses' => 'DocumentController@index']);
        Route::post('upload',['as'=>'documents.upload', 'access' => '', 'uses'=>'DocumentController@post_upload']);
        Route::get('monitor',['as'=>'documents.monitor', 'access' => '', 'uses'=>'DocumentController@monitor']);
        Route::get('{id}/history', ['as'=> 'document.history', 'access' => '', 'uses' => 'DocumentController@document_history']);
    });
});



