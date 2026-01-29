<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckTimeAccess;
use App\Http\Middleware\CheckAge;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return View('home');
})->name('home');

Route::get('/signin', [AuthController::class, 'signIn']);
Route::post('/signin', [AuthController::class, 'checkSignIn'])->name('check.signin');

Route::get('/age', function () {
    return view('age');
});

Route::post('/save-age', function (Request $request) {
    $age = $request->input('age');
    session(['age' => $age]);
    return 'Age saved to session.<br><a href="' . route('product.index') . '">Go to Product Page</a>';
});
Route::prefix('product')->middleware([CheckTimeAccess::class , CheckAge::class])->group(function () {

 Route::controller(ProductController::class)->group(function () {
    Route::get('/', 'index') ->name('product.index');

    Route::get('/add', 'Add')->name('product.add');

    Route::get('/detail/{id?}', 'GetDetail')->name('product.detail');

    });
}); 

Route::get('/sinhvien/{name?}/{mssv?}', function ($name="Luong Xuan Hieu", $mssv="123456") {
        return "Họ và Tên: Nguyễn Văn Nam - MSSV: 0052167 - Lớp: 67PM2";
    });
     
Route::get('/banco/{n}', function ($n) {
    return View('banco.banco',['n' => $n]);
})->name('banco');


Route::fallback(function () {
    return view('error.404');
});