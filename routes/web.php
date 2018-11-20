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

Route::get('/', function () {
//    return "123";
    //echo date("Y-m-d H:i:s");
    //Config::set("app.locale","cn");
    //echo Config::get("app.locale");
   // echo env("DB_USERNAME");
    return "welcome";
});
Route::get('/login',function(){
   return '这是登录页';
});
Route::get('/testcheck',function(){
    return '也是验证通过页';
})->middleware('testcheck');
Route::get('/test/index','TestController@index')->name('aaa');
Route::get('/test/namess','TestController@namess');
Route::get('/article/index','ArticleController@index');