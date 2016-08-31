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

Route::get('/', ['uses' => 'ProductController@getIndex', 'as' => 'product.index']);

//Cart route
Route::get('/add-to-cart/{id}', ['uses' => 'ProductController@getAddToCart', 'as' => 'product.addToCart']);
Route::get('/shopping-cart', ['uses' => 'ProductController@getCart', 'as' => 'product.shoppingCart']);

//Checkout
Route::get('/checkout', ['uses' => 'ProductController@getCheckout', 'as' => 'checkout']);
Route::post('/checkout', ['uses' => 'ProductController@postCheckout', 'as' => 'checkout']);

//sign Up
Route::get('/signup', ['uses' => 'UserController@getSignup', 'as' => 'user.signup']);
Route::post('/signup', ['uses' => 'UserController@postSignup', 'as' => 'user.signup']);

//Sign in
Route::get('/signin', ['uses' => 'UserController@getSignin', 'as' => 'user.signin']);
Route::post('/signin', ['uses' => 'UserController@postSignin', 'as' => 'user.signin']);

// User Profile
Route::get('/user/profile', ['uses' => 'UserController@getProfile', 'as' => 'user.profile']);
