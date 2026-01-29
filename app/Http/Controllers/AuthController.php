<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signIn()
    {
        return view('signin');
    }

    public function checkSignIn(Request $request)
{
    $username   = $request->username;
    $password   = $request->password;
    $repass     = $request->repass;
    $mssv       = $request->mssv;
    $lopmonhoc  = $request->lopmonhoc;
    $gioitinh   = $request->gioitinh;

    if ($password !== $repass) {
        return "Đăng ký thất bại";
    }

    if (
        $username === 'Namnv' &&
        $mssv === '0052167' &&
        $lopmonhoc === '67PM2' &&
        $gioitinh === 'nam'
    ) {
        return "Đăng ký thành công!";
    }

    return "Đăng ký thất bại";
}
}
