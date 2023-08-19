<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/contact', function(){
    return view('contact');
});
Route::post('/email', function(){
    return '<h1>Email Page</h1>';
    if(!empty($_POST)){
        dump($_POST);
    }
});
