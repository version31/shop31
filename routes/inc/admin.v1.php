<?php

/*
|--------------------------------------------------------------------------
| Ready to use
|--------------------------------------------------------------------------
*/

Route::post('attributes', 'AttributeController@store');
Route::post('products', 'ProductController@store');
Route::resource('products', 'ProductController@store');