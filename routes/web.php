<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckTimeAccess;
use App\Http\Middleware\CheckAge;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


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
Route::prefix('product')
->middleware([CheckTimeAccess::class , CheckAge::class])
->group(function () {

    Route::controller(ProductController::class)->group(function () {

        // danh sách
        Route::get('/', 'index')->name('product.index');

        // form thêm
        Route::get('/create', 'create')->name('product.create');

        // lưu
        Route::post('/store', 'store')->name('product.store');

        // form sửa
        Route::get('/edit/{id}', 'edit')->name('product.edit');

        // cập nhật
        Route::post('/update/{id}', 'update')->name('product.update');

        // xóa mềm
        Route::get('/delete/{id}', 'destroy')->name('product.delete');

    });

});
