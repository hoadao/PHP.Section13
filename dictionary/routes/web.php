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
//Route::get('/output', function (){
//    return view('output');
//})->name('output');
Route::get('/main', function (){
    return view('input');
});
Route::get('/main1', 'DictionaryController@translate')->name('result');