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
    return view('home');
});
Route::get('naon', function () {
    $nama = 'wahyu';
    return view('welcome', ['variabel' => $nama]);

});

Route::view('login','login');
Route::view('regist','regist');
Route::view('about','about');
Route::view('services','services');
Route::view('portfolio','portfolio');
    