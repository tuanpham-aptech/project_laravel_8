<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $user = new User();
        $data = $user->getAll();
        return view("admin.users.users",["users"=>$data]);
    }

    public function editUser($id) {
        $user = new User();
        $page_title = 'CHỈNH SỬA THÔNG TIN NGƯỜI DÙNG';
        $us = $user->find($id);
       return view("admin.users.edit-user",[
           "us"=>$us,
           'page_title'=>$page_title
        ]);
    }

    public function updateUser(UserRequest $req, $id) {
        $user = User::find($id);
        $date = date('Y-m-d H:i:s');
        $user->name = $req->name;
        $user->email = $req->email;
        $user->status = $req->status;
        $user->updated_at = $date;
        $user->update();
        return redirect()->route('list-users');
    }

    public function deleteUser($id) {
        $del = User::find($id);
        $del->deleteUser($id);
        return redirect()->route('list-users');
    }

    public function showFormSendLink() {
        $cat = new Category();
        $categories = $cat->getCategories();
        $page_title = 'THAY ĐỔI MẬT KHẨU ';
        return view('change-password',[
            'page_title'=>$page_title,
            'categories'=>$categories,
        ]);
    }

    public function sendResetLink(Request $req){
        $date = date('Y-m-d H:i:s');
        $req->validate([
            'current_password'=>'required',
            'password'=>'required|confirmed|min:8',
        ]);
        $hashedPassword = Auth::user()->password;
        if(Auth::check($req->current_password,$hashedPassword)){
            $user = User::find(Auth::id());
            // dd($user);
            $user->password = Hash::make($req->password);
            $user->updated_at = $date;
            $user->save();
            Auth::logout();
            return redirect()->route('login');
        }else{
            return redirect()->back()->width('danger','Mật khẩu cũ không khớp yêu cầu kiểm tra lại');
        }

    }
}
