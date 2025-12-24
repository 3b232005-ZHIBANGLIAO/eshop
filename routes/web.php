<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);

/*
根據 php artisan route:list 的顯示結果

products.index
URI: GET /products
HTTP Method: GET
Controller & Method: ProductController@index
說明：顯示所有 products 資料

products.store
URI: POST /products
HTTP Method: POST
Controller & Method: ProductController@store
說明：儲存新增的 product 資料

products.create
URI: GET /products/create
HTTP Method: GET
Controller & Method: ProductController@create
說明：顯示新增 product 的表單

products.show
URI: GET /products/{product}
HTTP Method: GET
Controller & Method: ProductController@show
說明：顯示某一項 product 的資料

products.update
URI: PUT / PATCH /products/{product}
HTTP Method: PUT / PATCH
Controller & Method: ProductController@update
說明：更新某一項 product 的資料

products.destroy
URI: DELETE /products/{product}
HTTP Method: DELETE
Controller & Method: ProductController@destroy
說明：刪除某一項 product 的資料

products.edit
URI: GET /products/{product}/edit
HTTP Method: GET
Controller & Method: ProductController@edit
說明：顯示編輯 product 的表單
*/
