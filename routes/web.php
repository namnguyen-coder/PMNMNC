<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('/', function () {
    return View('home');
})->name('home');

Route::prefix('product')->group(function () {
    Route::get('/', function () {
        return View('product.index');
    })->name('product.index');

    Route::get('/add', function () {
        return View('product.add');
    })->name('add'); 
    
    Route::get('/{id}', function ($id) {
        return View( ['id' => $id]);
    });
    
});

Route::get('/sinhvien/{name?}/{mssv?}', function ($name="Luong Xuan Hieu", $mssv="123456") {
        return "Họ và Tên: Nguyễn Văn Nam - MSSV: 0052167 - Lớp: 67PM2";
    });
     


Route::get('/banco/{n}', function ($n) {
    return View('banco.banco',['n' => $n]);
})->name('banco');

Route::fallback(function () {
    return View('error.404');
})->name('404');