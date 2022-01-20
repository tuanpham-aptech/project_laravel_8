<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    public function allProduct(){
        $data = DB::select("select *from products");
        return $data;
    }

    public function getAllProductClients(){
        $data = DB::table('products')->get();
        return $data;
    }

    public function getProductHot(){
        $data = DB::table('products')->where('pro_hot',1)->get();
        return $data;
    }

    public function deleteProduct($id){
        $data = DB::table('products')->where('id',$id)->delete();
        return $data;
    }

    public function getProductPay(){
        $data = DB::table('products')->where('pro_pay','<>',0)->get();
        return $data;
    }

    public function category(){
        return $this->belongsTo(Category::class,'pro_category_id','id');
    }

    public function searchProductByName($name){
        $data = DB::table('products')
                ->where('pro_name', 'like', '%'.$name.'%')
                ->where('pro_active',1)
                ->get();
        return $data;
    }

    // public function getLatestProduct(){
    //     $mytime = now();
    //     dd($mytime);
    //     return DB::table('products');
    // }


}
