<?php

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
    return view('welcome');
});

Route::get('/admin',[\App\Http\Controllers\admin\HomeController::class,'index']);

Route::middleware('auth')->prefix('admin')->group(function (){
    Route::prefix('avtosalon')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\AvtosalonController::class, 'index'])->name('admin_avtosalon');
        Route::get('/create', [App\Http\Controllers\Admin\AvtosalonController::class, 'create'])->name('admin_avtosalon_create');
        Route::post('/store', [App\Http\Controllers\Admin\AvtosalonController::class, 'store'])->name('admin_avtosalon_store');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\AvtosalonController::class, 'update'])->name('admin_avtosalon_update');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\AvtosalonController::class, 'edit'])->name('admin_avtosalon_edit');
        Route::get('/show/{id}', [App\Http\Controllers\Admin\AvtosalonController::class, 'show'])->name('admin_avtosalon_show');
        Route::get('/destroy/{id}', [App\Http\Controllers\Admin\AvtosalonController::class, 'destroy'])->name('admin_avtosalon_destroy');

    });

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
