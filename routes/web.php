<?php

use App\Http\Controllers\AdminController;
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
    return view('login');
});
Route::post('verify_login',[AdminController::class,'login'])->name('verify_login');

Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');

Route::post('logout',[AdminController::class,'logout'])->name('logout');
