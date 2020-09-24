<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\AuthController;
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
        Route::get('/create',[GroupController::class,'showFormCreate'])->name('groups.create');
        Route::get('/{id}/detail',[GroupController::class,'detail'])->name('groups.detail');
        Route::get('/{id}/delete',[GroupController::class,'delete'])->name('groups.delete');
    });
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

});
