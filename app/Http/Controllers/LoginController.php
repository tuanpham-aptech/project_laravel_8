<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }
    public function login(LoginRequest $request){
        $rules = LoginRequest::rules();
        $messages = LoginRequest::messages();
        // khi đó $valid là 1 mảng
        $valid = $request->validate($rules,$messages);
        $email = $valid['email'];
        $pass = $valid['password'];
         if (Auth::attempt([
             'email' => $email,
             'password' => $pass,
         ])) {
             // truy vấn trong csdl xem có email trùng với email nhận dc ko và sử dụng hàm first() để lấy ra 1 bản ghi
             $user = User::where('email',$email)->first();
             // đăng nhập
             Auth::login($user);
            // lưu session
            $request->session()->regenerate();
            if($user->status ==1||$user->status ==2){
                return redirect()->route('dashboard');
            }else{
                return redirect()->route('home');
            }
        }
        return back()->withErrors([
            'email' => 'Thông tin đăng nhập không đúng yêu cầu kiểm tra lại ',
        ]);
    }

    public function flas(){
        return view('403');
    }

}
