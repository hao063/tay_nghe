<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Auth;
use Hash;
use App\Models\User;

class UserController extends Controller
{
    //

    public function login(UserRequest $request) {
        $dataForm = $request->all();
        if(Auth::guard('web')->attempt([
            'email' => $dataForm['email'],
            'password' => $dataForm['password']
        ])) {
            return redirect()->route('campaign.index');
        }
        return back()->with('login_error', 'Đăng nhập thất bại');
    }


    // Cấp mật khẩu mặc định là 123
    public function setPassword($id) {
        return  User::whereId($id)->update([
            "password_hash" => Hash::make(123)
        ]);
    }

    // Đăng xuất tài khoản
    public function logout() {
        Auth::logout();
        return redirect()->route('view.login');
    }


}
