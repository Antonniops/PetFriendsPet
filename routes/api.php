<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => 'cors'], function () {
    //Rutas a las que se permitirá acceso
    Route::get('/product/categoria/{animal}/{producto}', 'ProductController@categoria')->name('product.categoria');

    Route::resource('product', 'ProductController');
    Route::get('/product/item/{name}', 'ProductController@search')->name('product.search');
    Route::get('/checkOutSession/{products}', 'CheckoutController@checkOutSession'); 
    Route::get('/provincias', 'ProvincesController@provincias'); 

    Route::post('/login', 'AuthController@login');
    Route::post('/register', 'AuthController@register');
    // Send reset password mail
    Route::post('/reset-password', 'AuthController@sendPasswordResetLink');
            
    // handle reset password form process
    Route::post('/reset/password', 'AuthController@callResetPassword');
    Route::post('/shipping-information', 'AuthController@shipping_information');
    Route::middleware('auth:api')->post('/logout', 'AuthController@logout');
    
    Route::post('/order', 'OrderController@store');

});

