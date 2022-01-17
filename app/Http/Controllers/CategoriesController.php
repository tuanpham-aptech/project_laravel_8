<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Artical;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    // hiển thị danh sách chuyên mục get
    public function index(){
        $cat = new Category();
        $categories = $cat->getCategories();
        return view("admin.category.categories",compact("categories"));
    }

    // lấy 1 chuyên mục theo id phương thức get
    public function editCategory($id){
        $page_title = 'CHỈNH SỬA DANH MỤC ';
        $cate = new Category();
        $data = $cate->find($id);
        return view('admin.category.edit-category',[
            'page_title'=>$page_title,
            'data'=>$data,
        ]);
    }

   // Show form thêm dữ liệu phương thức get
    public function createCategory(){
        $page_title = 'THÊM MỚI DANH MỤC';
        return view('admin.category.create-category',compact('page_title'));

    }

     // Show form thêm dữ liệu phương thức get
     public function insertCategory(CategoryRequest $req){
        $cat = new Category();
        $date = date('Y-m-d H:i:s');
        // $page_title = 'Create Category';
        $cat->c_name = $req->c_name;
        $slug = Str::slug($req->c_name,'-');
        $cat->c_slug = $slug;
        $cat->c_title_seo = $req->c_title_seo?$req->c_title_seo:$req->c_name;
        $cat->created_at = $date;
        $cat->updated_at = $date;
        $cat->save();
        return redirect()->route('categories')->with('success','Thêm mới thành công!');
    }

      //Cập nhật 1 chuyên mục theo id phương thức post
      public function updateCategory(CategoryRequest $req,$id){
        $cat = Category::find($id);
        $date = date('Y-m-d H:i:s');
        $cat->c_name = $req->c_name;
        $slug = Str::slug($req->c_name,'-');
        $cat->c_slug = $slug;
        $cat->c_title_seo = $req->c_title_seo?$req->c_title_seo:$req->c_name;
        $cat->updated_at = $date;
        $cat->update();
        return redirect()->route('categories')->with('success','Cập nhật thành công!');;
    }

    // phương thức delete  category
    public function deleteCategory($id){
        $cat = new Category();
        $find = $cat->find($id);
        $find->deleteCategory($id);
        return redirect()->route('categories')->with('success','Đã xoá sản phẩm vừa chọn !');;
    }

    public function getListProduct(Request $req){
        $cat = new Category();
        $ar = new Artical();
        $categories = $cat->getCategories();
        $articals = $ar->getArticalClient();
        $url = $req->segment(2);
        $url = preg_split('/(-)/i',$url);
        // dd($url);
        if($id = array_pop($url)){
            $products = Product::where([
                'pro_category_id'=>$id,
                'pro_active'=>1
            ])->orderBy('id','DESC')->paginate(10);
            return view('product-category',[
                'products'=>$products,
                'categories'=>$categories,
                'articals'=>$articals,
                'id'=>$id
            ]);
        }
        return redirect('/');
    }

}
