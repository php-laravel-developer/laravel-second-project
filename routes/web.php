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
    return view('welcome');
});


Route::get("form","TestController@myForm");
Route::post("submitmyform","TestController@submitmyform");

Route::get("select","TestController@selectModel");
Route::get("queryrun","TestController@queryrun");
Route::get("orm","TestController@insertrec");
Route::get("orm2","TestController@insertrec2");


Route::get("home","HtmlController@home");
Route::get("portfolio","HtmlController@portfolio");
Route::get("features","HtmlController@features");
Route::get("about","HtmlController@about");

Route::get("home3","HtmlController@home");
Route::get("home","HtmlController@home");
Route::get("home1","HomeController@index");
Route::get("contact","HomeController@call");
Route::get("service","HomeController@services");
Route::get("product","HomeController@product");
Route::get("team","HomeController@team");
Route::get("test","TestController@condition");

Route::get("/call",function(){

 return view("call"); 
// using closure function to call view file directly 

});
