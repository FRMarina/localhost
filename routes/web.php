<?php


Auth::routes();
Route::get('/','BaseController@getIndex');
Route::get('category/{id}','CategoryController@getIndex');
Route::get('search','SearchController@getIndex');
Route::get('basket','BasketController@getIndex');
Route::get('basket/delete/{id}', 'BasketController@getDelete');
Route::post('order', 'OrderController@postIndex');
Route::get('sockets_viko','BrandController@getViko');
Route::get('sockets_schneider','BrandController@getSchneider');
Route::get('sockets_legrand','BrandController@getLegrand');
Route::get('breakers_viko','BrandController@getVikoBreakers');
Route::get('breakers_schneider','BrandController@getSchneiderBreakers');
Route::get('breakers_legrand','BrandController@getLegrandBreakers');
Route::get('extensions','BrandController@getExtensions');
Route::get('work','BrandController@getWork');
Route::get('product-viko','SmallProductController@getSmall');
Route::get('product-viko2','SmallProductController@getSmall2');
Route::get('product-viko3','SmallProductController@getSmall3');
Route::get('rams','BrandController@getRams');
Route::get('product-legrand','SmallProductController@getSmall4');
Route::get('product-schneider','SmallProductController@getSmall5');
//home
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home','HomeController@postIndex');
Route::get('/home/edit/{id}', 'HomeController@getEdit');
Route::get('/home/delete/{id}', 'HomeController@getDelete');
Route::post('/home/edit/{id}', 'HomeController@postEdit');
//ajax
Route::post('/ajax/product', 'AjaxController@postIndex');

// всегда последний должен быть
Route::get('{url}','MaintextController@getIndex');
