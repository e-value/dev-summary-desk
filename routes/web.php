<?php

use Illuminate\Support\Facades\Route;
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

// 法律
Route::resource('laws', LawController::class);

// 法律情報
Route::get('revisionLaws/export', [ExportRevisionLawController::class, 'export'])->name('revisionLaws.export');
Route::resource('revisionLaws', RevisionLawController::class);
