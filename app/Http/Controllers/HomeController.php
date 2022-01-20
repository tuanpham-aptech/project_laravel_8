<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Artical;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(){
        $pro = new Product();
        $cat = new Category();
        $ar = new Artical();
        $categories = $cat->getCategories();
        $products   = $pro->getAllProductClients();
        $prohots  = $pro->getProductHot();
        $proselling = $pro->getProductPay();
        $articals = $ar->getArticalClient();
        return view('home',[
            'products'  =>$products,
            'categories'=>$categories,
            'prohots' =>$prohots,
            'proselling'=>$proselling,
            'articals'=>$articals
        ]);
    }

    public function productSelling(){
        $pro = new Product();
        $cat = new Category();
        $ar = new Artical();
        $page_title = "SẢN PHẨM BÁN CHẠY";
        $categories = $cat->getCategories();
        $proselling = $pro->getProductPay();
        $articals = $ar->getArticalClient();
        return view('product-selling',[
            'categories'=>$categories,
            'proselling'=>$proselling,
            'page_title' =>$page_title,
            'articals'=>$articals
        ]);
    }

    public function productHot(){
        $pro = new Product();
        $cat = new Category();
        $ar = new Artical();
        $page_title = "SẢN PHẨM NỔI BẬT";
        $categories = $cat->getCategories();
        $prohots = $pro->getProductHot();
        $articals = $ar->getArticalClient();
        return view('product-selling',[
            'categories'=>$categories,
            'proselling'=>$prohots,
            'page_title' =>$page_title,
            'articals'=>$articals
        ]);
    }

    public function searchClient(Request $req){
        $cat = new Category();
        $pro = new Product();
        $ar = new Artical();
        $categories = $cat->getCategories();
        $search = $req->input('search');
        $data = $pro->searchProductByName($search);
        $articals = $ar->getArticalClient();

        return view('search-component',[
            'categories'=>$categories,
            'data' =>$data,
            'name'=>$search,
            'articals'=>$articals
        ]);
    }

    // public function latestProduct(Request $req){
    //     $cat = new Category();
    //     $pro = new Product();
    //     $ar = new Artical();
    //     $categories = $cat->getCategories();
    //     $search = $req->input('search');
    //     $data = $pro->searchProductByName($search);
    //     $articals = $ar->getArticalClient();
    //     $products = $pro->getLatestProduct();
    //     return view('latest-product',[
    //         'categories'=>$categories,
    //         'data' =>$data,
    //         'articals'=>$articals,
    //         'products'=>$products
    //     ]);
    // }

}

