<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    //Function dinh dang bieu mau cho chuc nang Login
    function login()
    {
        return view('login');
    }

    function register()
    {
        return view('register');
    }

    //Chuc nang login POST
    function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credential = $request->only('email', 'password');
        if (Auth::attempt($credential)) {
            //Login Success thi chuyen huong user den trang chu
            return redirect()->intended(route('home'));
        }
        //Truong hop login failed ton tai login page
        return redirect(route('login'))->with("error", "Tài khoản đăng nhập không chính xác");
    }

    function registerPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => "required"
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password); //Dung Hash bam ma hoa mat khau khach hang
        $user = User::create($data);
        if (!$user) {
            return redirect(route('register'))->with("error", "Đăng ký không thành công, thử lại");
        }
        return redirect(route('login'))->with("success", "Tài khoản của bạn đã được đăng ký thành công");
    }

    //Logout xoa phien dang nhap
    function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
