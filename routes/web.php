<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('dashboard');
//});


// 首页随机建筑数据展示
Route::any("/", "IndexController@index");

// 多条件查询，数据 table 展示
Route::any("/info", "IndexController@info");

// 搜索到的所有数据的excel 导出
Route::get("/excel", "IndexController@toExcel");

// 多条件查询，数据 table 展示
Route::get("/info2", "IndexController@info2");

// 多条件查询，数据 table 展示
Route::get("/dashboard_gate", "IndexController@dashboard_gate");
// 多条件查询
Route::get("/dashboard", "IndexController@dashboard");

Route::any("/info_search", "IndexController@info_search");
Route::any("/info_export", "IndexController@info_export");


