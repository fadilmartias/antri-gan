<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

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
Route::get('/', function(){
    return redirect(route('login'));
});

Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login/post', [UserController::class, 'actionLogin'])->name('login.store');
Route::post('logout', [UserController::class, 'actionLogout'])->name('logout');

Route::middleware('auth')->group(function () {
     Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
     Route::prefix('custom')->group(function () {
       // Mahasiswa
       Route::get('background', [CustomController::class, 'editBackground'])->name('custom.background.edit');
       Route::get('running-text', [CustomController::class, 'editRunningText'])->name('custom.running-text.edit');
     });
});