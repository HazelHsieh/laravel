<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('text')->group(function(){

    //文章管理
    Route::prefix('/blog')->group(function(){
        //檢視（儲存）
        Route::get('/', 'BlogController@index');
        //新增/儲存
        Route::get('/create','BlogController@create');
        Route::post('/store','BlogController@store');
        //編輯/更新
        Route::get('/edit/{id}','BlogController@edit');
        Route::post('/update/{id}','BlogController@update');
        //刪除
        Route::get('/delete/{id}','BlogController@delete');

    });

});

// laravel 的路由中，可以利用 花括弧 去將網址的特定區段轉換成變數


//  商品檢視(列表) 1/4
//Route::get('/product', 'GoodsController@index');
// 商品新增/儲存
//Route::get('/product/create', 'GoodsController@create');
//Route::post('/product/store', 'GoodsController@store');


Route::middleware('text')->group(function(){

    //商品管理
    Route::prefix('/product')->group(function(){
        //  商品檢視(列表)
        Route::get('/', 'ShopcartController@index');
        // 商品新增/儲存
        Route::get('/create', 'ShopcartController@create');
        Route::post('/store', 'ShopcartController@store');
        //商品的編輯/更新
        Route::get('/edit/{id}','ShopcartController@edit');
        Route::post('/update/{id}','ShopcartController@update');

        //商品刪除
        Route::get('/delete/{id}','ShopcartController@delete');

        //圖片上傳
        Route::post('/imgUpload', 'ShopcartController@imgUpload');
        //圖片 x刪除
        Route::post('/imgDelete', 'ShopcartController@imgDelete');

    });

});

Route::middleware('text')->group(function(){

    //會員管理
    Route::prefix('/user')->group(function(){
        //  商品檢視(列表)
        Route::get('/', 'UserController@index');
        //會員的觀看/更新
        Route::get('/look/{id}','UserController@look');
        Route::post('/update/{id}','UserController@update');
    });

    //訂單管理
    Route::prefix('/order')->group(function(){
        //  商品檢視(列表)
        Route::get('/', 'OrderController@index');
        //訂單的觀看/更新
        Route::get('/look/{id}','OrderController@look');
        Route::post('/update/{id}','OrderController@update');
    });

});





// Route::get('/page', function(){
//     //變數宣告
//     $data = '我是謝孟樺';
//     $a = '1';
//     $b = '2';
//     //會動態轉換資料 + 等於數學的邏輯運算
//     dump($a . $b);

//     return view('page');
// });

Route::get('/page');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
