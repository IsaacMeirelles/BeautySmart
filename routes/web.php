<?php


//Route::get('/', function () {
//    return view('welcome');
//});

Route::resource("/",'AppBeautySmart\AppBeautySmartController');

Route::resource("/products",'Products\ProductsController');

Route::resource("/customers",'Customers\CustomersController');
