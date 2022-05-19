<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BotmanController;

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

Route::get('/about', function () {
    return view('about');
});

Route::get('/carikeahlian', function () {
    return view('carikeahlian');
});


Route::match(['get', 'post'], '/botman', [BotmanController::class, 'handle']);
Route::get('/botman/tinker',  [BotmanController::class, 'tinker']);