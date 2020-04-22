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



    Auth::routes();

Route::group(['middleware'=>'auth'], function(){ 

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/form','formController@show')->name('form');

Route::get('/export_excel',"formController@create")->name('export');


Route::post("/form", "formController@add");
//Route::get('/export_excel',"ExportExcelController@index");
//Route::get('/export_excel/excel',"ExportExcelController@excel");
Route::get('/export','ExportExcelController@exportExcel')->name('export_excel.excel');

}) ;  
