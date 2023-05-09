<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Bạn chưa nhập email',
            'password.required' => 'Bạn chưa nhập mật khẩu',
        ]);

        if ($validator->fails()) {
            return response()->json(['is' => 'login-failed', 'error' => $validator->errors()->all()]);
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember = true)) {
            return response()->json(['is' => 'login-success']);
        }
        return response()->json(['is' => 'incorrect', 'incorrect' => 'Sai tài khoản hoặc mật khẩu!']);
    }
}
