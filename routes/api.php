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

    Route::get('/product/categoria/{animal}/{producto}', 'ProductController@categoria')->name('product.categoria');
    Route::get('/product/item/{name}', 'ProductController@search')->name('product.search');
    Route::post('/product/recomendados', 'ProductController@obtener_recomendados');

    Route::post('/checkOutSession', 'CheckoutController@checkOutSession'); 
    Route::post('/webhook', 'CheckoutController@check_order_status'); 

    Route::get('/provincias', 'ProvincesController@provincias'); 

    Route::get('/check-admin-token/{id}', 'AuthController@check_admin_token');
    Route::post('/login', 'AuthController@login');
    Route::post('/admin/login', 'AuthController@admin_login');
    Route::post('/register', 'AuthController@register');
    Route::post('/admin/check-role', 'AuthController@check_role');
    Route::post('/shipping-information', 'AuthController@shipping_information');
    Route::post('/reset-password', 'AuthController@sendPasswordResetLink');
    Route::post('/reset/password', 'AuthController@callResetPassword');
    Route::post('/shipping-information', 'AuthController@shipping_information');
    
    Route::get('/appointment', 'AppointmentController@getAppointment');
    Route::post('/appointment', 'AppointmentController@saveAppointment');
   
    Route::post('/order', 'OrderController@store');

    // Rutas con login
    Route::group(['middleware' => 'auth:api'], function () {

        Route::post('/logout', 'AuthController@logout');

        // Rutas admin
        Route::group(['middleware' => 'scope:admin-status'], function () {

            Route::resource('product', 'ProductController');

            Route::get('/order', 'OrderController@index');
            Route::post('/order/complete', 'OrderController@complete_order');
            Route::post('/order/details', 'OrderController@show');
    
        });

    });
    
});

