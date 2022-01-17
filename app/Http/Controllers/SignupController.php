<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SignupController extends Controller
{
     public function get(Request $request){
         return view('auth.register');
     }

     public function post(Request $request){
         $valid = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
         ]);
         $user = new User();
         // insert
         $user::insert([
             'name'=>$request->input('name'),
             'email'=>$request->input('email'),
             'password'=>Hash::make($request->input('password')),
             'status'=>0,
             'created_at'=>date('Y-m-d H:i:s'),
             'updated_at'=>date('Y-m-d H:i:')
         ]);
        return redirect('login');
     }
}
