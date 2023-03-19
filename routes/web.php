<?php

use App\Events\BuatPesan;
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
    BuatPesan::dispatch('lalalal');
    return view('welcome');
});
Route::get('/p', function () {
    return view('pesan_dibuat');
});
