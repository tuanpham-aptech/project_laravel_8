<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index(){
        $arm = new User();

        $order = $arm->statistical('transactions');
        $product = $arm->statistical('products');
        $category = $arm->statistical('categories');
        $user = $arm->statistical('users');
        $artical = $arm->statistical('articals');
        $contact = $arm->statistical('contacts');
        return view('admin.dashboard',[
            'order'=>$order,
            'product'=>$product,
            'category'=>$category,
            'user'=>$user,
            'artical'=>$artical,
            'contact'=>$contact
        ]);
    }

    // public function billOrder(){
    //     return view('admin/invoice-order');
    // }
}
