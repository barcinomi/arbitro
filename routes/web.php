<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/',  [PagesController::class, 'index']);

Route::get('/swap',  [PagesController::class, 'swap']);
Route::get('/swaputk',  [PagesController::class, 'swaputk']);
Route::get('/wrap',  [PagesController::class, 'wrapEGLD']);
Route::get('/unwrap',  [PagesController::class, 'unwrapEGLD']);
Route::get('/sendToBinanceUTK',  [PagesController::class, 'sendToBinanceUTK']);

