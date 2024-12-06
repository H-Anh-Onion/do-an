<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AptechController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hoc-laravel',[AptechController::class,"hello"]);
Route::get('/hoc-reactjs',[AptechController::class,"reactjs"]);
Route::get('/trang-chu',[HomeController::class,"homepage"]);
Route::get('/thanh-vien',[HomeController::class,"member"]);
Route::get('/xoa-thanh-vien/{id}',[HomeController::class,"deleteMember"]);