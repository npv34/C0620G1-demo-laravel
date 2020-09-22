<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LoginController;
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

Route::get('/login', [LoginController::class, 'showFormLogin']);
Route::post('/login', [LoginController::class, 'login']);

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'showDashBoard']);
    Route::prefix('groups')->group(function () {
        Route::get('/',[GroupController::class,'index'])->name('groups.index');
        Route::get('/{id}/detail',[GroupController::class,'detail'])->name('groups.detail');
        Route::get('/{id}/delete',[GroupController::class,'delete'])->name('groups.delete');
    });
});
