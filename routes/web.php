<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;

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

Route::view('/', 'inicio')->name('inicio');

Route::view('productos','productos')->name('productos');
Route::view('productos2','productos2')->name('productos2');
Route::view('productos3','productos3')->name('productos3');

Route::view('blog', 'blog')->name('blog');

Route::view('contacto', 'contacto')->name('contacto');

Route::post('contacto', [MessagesController::Class,'store']);