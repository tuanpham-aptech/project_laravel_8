<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $products = Product::all();

        $page_title = 'BẢNG SẢN PHẨM';
        return view('admin.products.products',compact('products'),compact('page_title'));
    }

    public function search(Request $req){
        $products = Product::with('category:id,c_name');
        if($req->name) $products->where('pro_name','like','%'.$req->name.'%');
        return view('admin.products.products',compact('products'),compact('page_title'));
    }

    public function createProduct(){
        $categories = Category::all();
        $page_title = 'THÊM SẢN PHẨM';
        return view('admin.products.create-product',compact('page_title'),compact('categories'));
    }

    public function insertProduct(ProductRequest $req){
        $date = date('Y-m-d H:i:s');
        $pro = new Product();
        $pro->pro_name = $req->pro_name;
        $slug = Str::slug($req->pro_name,'-');
        $pro->pro_slug = $slug;
        $pro->pro_category_id = $req->pro_category_id;
        $pro->pro_quantity = $req->pro_quantity;
        $pro->pro_price = $req->pro_price;
        $pro->pro_sale = $req->pro_sale;

        $pro->pro_description = $req->pro_description;

        $path = $req->pro_image->store('/',['disk'=>'my_disk']);
        $pro->pro_image = $path;

        $pro->pro_title_seo = $req->pro_title_seo?$req->pro_title_seo:$req->pro_name;
        $pro->created_at = $date;
        $pro->updated_at = $date;
        $pro->save();
        return redirect()->route('products');
    }

    public function editProduct($id){
        $page_title = 'CHỈNH SỬA SẢN PHẨM ';
        $pro = new product();
        $categories = Category::all();
        $data = $pro->find($id);
        return view('admin.products.edit-product',[
            'page_title'=>$page_title,
            'categories'=>$categories,
            'data'=>$data,
        ]);
    }

    public function updateProduct(ProductRequest $req,$id=''){
        $pro = Product::find($id);
        $date = date('Y-m-d H:i:s');
        $pro->pro_name = $req->pro_name;
        $slug = Str::slug($req->pro_name,'-');
        $pro->pro_slug = $slug;
        $pro->pro_category_id = $req->pro_category_id;

        if($req->pro_image){
            $pro = Product::find($id);

            if(file_exists('myuploads/'.$pro->pro_image)){
                // dd($pro->pro_image);
                unlink('myuploads/'.$pro->pro_image);
            }
            $path = $req->pro_image->store('/',['disk'=>'my_disk']);
            $pro->pro_image = $path;
        }

        $pro->pro_price = $req->pro_price;
        $pro->pro_sale = $req->pro_sale;
        $pro->pro_quantity = $req->pro_quantity;
        $pro->pro_description = $req->pro_description;
        $pro->pro_title_seo = $req->pro_title_seo ? $req->pro_title_seo : $req->pro_name;
        $pro->pro_active = $req->pro_active;
        $pro->pro_hot = $req->pro_hot;
        $pro->updated_at = $date;
        $pro->update();
        return redirect()->route('products');
    }

    public function deleteProduct($id){
        $pro = new Product();
        $find = $pro->find($id);
        $find->deleteProduct($id);
        return redirect()->route('products');
    }

    public function productDetail(Request $req){
        $cat = new Category();
        $pro = new Product();
        $categories = $cat->getCategories();
        $url = $req->segment(2);
        $url = preg_split('/(-)/i',$url);
        // $id = array_pop($url);
        // dd($id);
        if($id = array_pop($url)){
            $products = Product::where([
                'pro_active'=>1
            ])->find($id);
            $cat_id = $products->pro_category_id;
            $related = Product::where('pro_category_id',$cat_id)->where('id','<>',$products->id)->limit(4)->get();
            return view('product-detail',[
                'pro'=>$products,
                'categories'=>$categories,
                'id'=>$id,
                'pros'=>$related
            ]);
        }
    }
}
