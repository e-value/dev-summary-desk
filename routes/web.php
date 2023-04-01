<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\LawController;
use App\Http\Controllers\RevisionLawController;
use App\Http\Controllers\ExportRevisionLawController;

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
    return view('welcome');
});

// ユーザー認証
Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // トップページ
    Route::get('top', TopController::class)->name('top');

    // 法律
    Route::resource('laws', LawController::class);

    Route::group(['prefix' => 'revisionLaws'], function() {
        // 法律改正
        Route::resource('revisionLaws', RevisionLawController::class);
        // 法改正エクスポート
        Route::get('revisionLaws/export', [ExportRevisionLawController::class, 'export'])->name('revisionLaws.export');
    });
});
