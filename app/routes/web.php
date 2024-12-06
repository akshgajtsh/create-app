<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ToppageController;
use App\Http\Controllers\Auth\AdminRegisterController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\AdminTopController;
use App\Admin;

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

/*Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', 'HomeController@index')->name('home');*/

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    //トップページ画面
    Route::get('/', [ToppageController::class, 'index'])->name('home');
});


//管理者関連
Route::prefix('admin')->group(function () {
    //管理者新規登録画面
    Route::get('/adminregister', [AdminRegisterController::class, 'showAdminregister'])->name('admin.register');
    Route::post('/adminregister', [AdminRegisterController::class, 'Adminregister']);
    //管理者ログイン画面
    Route::get('/login', [AdminLoginController::class, 'showAdminlogin'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'Adminlogin']);
    //ログアウト
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    //管理者トップページ
    Route::get('/admintop', [AdminTopController::class, 'index'])->name('admin.admintop');
});
