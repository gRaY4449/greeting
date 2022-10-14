<?php

use Illuminate\Support\Facades\Route;

/*
|-------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/greetings/random', [App\Http\Controllers\greetings::class, 'randomcomment']);
Route::get('/greetings/{time}', [App\Http\Controllers\greetings::class, 'comment']);
Route::get('/greetings/freeword/{freeword}', [App\Http\Controllers\greetings::class, 'freecomment']);
