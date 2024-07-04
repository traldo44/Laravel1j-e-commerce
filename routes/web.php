<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home.index');
});
//Route::redirect('/anasayfa','/home');
Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::get('/aboutus',[HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/test/{id}/{name}',[HomeController::class, 'test'])->name('test');
Route::get('/admin/login',[HomeController::class, 'login'])->name('adminlogin');
Route::get('/admin',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin');
Route::post('/admin/logincheck',[HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/loginout',[HomeController::class, 'loginout'])->name('admin_logout');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
