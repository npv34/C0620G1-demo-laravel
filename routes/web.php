<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
//Route::get('/', function (){
//    return redirect()->route('admin.dashboard');
//});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'showDashBoard'])->name('admin.dashboard');
    Route::prefix('groups')->group(function () {
        Route::get('/',[GroupController::class,'index'])->name('groups.index');
        Route::get('/create',[GroupController::class,'create'])->name('groups.create');
        Route::post('/create',[GroupController::class,'store'])->name('groups.store');
        Route::get('/{id}/detail',[GroupController::class,'detail'])->name('groups.detail');
        Route::get('/{id}/delete',[GroupController::class,'delete'])->name('groups.delete');
        Route::get('/{id}/users',[GroupController::class,'getUserOfGroup'])->name('groups.getUserOfGroup');
    });

    Route::prefix('users')->group(function (){
        Route::get('/',[UserController::class,'index'])->name('users.index');
        Route::get('/create',[UserController::class,'create'])->name('users.create');
        Route::get('/{id}/delete',[UserController::class,'delete'])->name('users.delete');
        Route::post('/store',[UserController::class,'store'])->name('users.store');

    });
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

});
