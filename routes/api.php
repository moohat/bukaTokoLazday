<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//users
Route::get('users','Api\UsersApiController@index');
Route::get('user/{iduser}','Api\UsersApiController@user');
Route::post('auth/login','Api\UsersApiController@login');
Route::post('auth/register','Api\UsersApiController@register');
Route::post('auth/update/{iduser}','Api\UsersApiController@update');
Route::get('logout/{iduser}','Api\UsersApiController@logout');

//products
Route::get('products','Api\ProductController@products');
Route::get('product/{idproduct}','Api\ProductController@product');

//transaction
Route::get('transaction','Api\TransactionApiController@index');
Route::post('transaction','Api\TransactionApiController@store');
Route::get('transaction/{code}','Api\TransactionApiController@detail');
Route::get('transaction-user/{iduser}/{status?}','Api\TransactionApiController@byUser');

Route::post('upload/{codetra}','Api\TransactionApiController@upload');
