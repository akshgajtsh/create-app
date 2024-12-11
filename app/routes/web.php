<?php

use App\Events\MessageSent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ToppageController;
use App\Http\Controllers\Admin\AdminRegisterController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\CreateEmployeeController;
use App\Http\Controllers\AdminTopController;
use Symfony\Component\EventDispatcher\Event;
use App\Http\Controllers\BotController;
//use App\Http\Controllers\MessageController;
use Illuminate\Http\Request;
use App\Admin;
use App\BotResponse;

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
    Route::get('/chatbots', [BotController::class, 'index'])->name('chatbots');
    //ajax通信のルーティング
    //Route::post('/newmessage', [BotController::class, 'newmessage']);
    //Route::get('/allmessage', [BotController::class, 'allMessages']);
    Route::post('/get-bot-reply', function (Request $request) {
        $keyword = $request->input('keyword');
        // キーワードに対応するボット返信を取得
        $response = BotResponse::where('keyword', $keyword)->first();
        return response()->json([
            'reply' => $response->reply ?? '申し訳ありませんが、対応する返信が見つかりません。',
            'link' => $response->link ?? ''
        ]);
    });
});

//管理者関連
Route::prefix('admin')->group(function () {
    //管理者ログイン画面
    Route::get('/login', [AdminLoginController::class, 'showAdminlogin'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'Adminlogin']);
    //管理者新規登録画面
    Route::get('/adminregister', [AdminRegisterController::class, 'showAdminregister'])->name('admin.register');
    Route::post('/adminregister', [AdminRegisterController::class, 'Adminregister']);
});

Route::middleware(['AdminMiddleware'])->prefix('admin')->group(function () {
    //ログアウト
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    //管理者トップページ
    Route::get('/admintop', [AdminTopController::class, 'index'])->name('admin.admintop');
    //管理者従業員アカウント作成
    Route::get('/register', [CreateEmployeeController::class, 'showEmployeeregister'])->name('admin.employeeregister');
    Route::post('/register', [CreateEmployeeController::class, 'createEmployee']);
});
