<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Artical;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\NewRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ArticalController extends Controller
{
    public function index(){

        $articals= Artical::all();

        $page_title = 'QUẢN LÝ BÀI VIẾT';
        return view('admin.articals.articals',[
            'page_title' => $page_title,
            'articals' => $articals
        ]);
    }

    public function createArticals(){
        $page_title = 'THÊM BÀI VIẾT ';
        return view('admin.articals.create-artical',compact('page_title'));
    }

    public function insertArticals(NewRequest $req){
        $ns = new Artical();
        $user = Auth::user()->id;
        $date = date('Y-m-d H:i:s');
        $ns->ns_name = $req->ns_name;
        $slug = Str::slug($req->ns_name,'-');
        $ns->ns_slug = $slug;
        $ns->ns_description = $req->ns_description;
        $ns->ns_content = $req->ns_content;
        $ns->ns_user_id = $user;
        $ns->ns_description_seo = $req->ns_description_seo?$req->ns_description_seo:$req->ns_description;
        $ns->ns_title_seo = $req->ns_title_seo?$req->ns_title_seo:$req->ns_name;

        $data = $req->ns_image;
        $photo = $req->ns_image->getClientOriginalName();
        $destination = base_path() . '/public/assets/images';
        $req->ns_image->move($destination, $photo);
        $ns->ns_image = $photo;

        $ns->created_at = $date;
        $ns->updated_at = $date;
        $ns->save();
        return redirect()->route('list-articals')->with('success','Thêm mới thành công!');
    }

    public function editArticals($id){
        $articals = Artical::find($id);
        // dd($articals);
        $page_title = 'CHỈNH SỬA BÀI VIẾT';
        return view('admin.articals.edit-artical',[
            'page_title' => $page_title,
            'articals' => $articals
        ]);

    }

    public function updateArticals(NewRequest $req,$id) {
        $ns = Artical::find($id);
        $date = date('Y-m-d H:i:s');
        $ns->ns_name = $req->ns_name;
        $slug = Str::slug($req->ns_name,'-');
        $ns->ns_slug = $slug;
        $ns->ns_description = $req->ns_description;
        if($req->ns_image){
        $photo = $req->ns_image->getClientOriginalName();
        $destination = base_path() . '/public/assets/images';
        $req->ns_image->move($destination, $photo);
        $ns->ns_image = $photo;
        }else{
            $photo = $ns->ns_image;
            $destination = base_path() . '/public/assets/images';
            $ns->ns_image = $photo;
        }
        // dd($ns->ns_image);

        $ns->ns_content = $req->ns_content;
        $ns->ns_title_seo = $req->ns_title_seo?$req->ns_title_seo:$req->ns_name;
        $ns->ns_description_seo = $req->ns_description_seo?$req->ns_description_seo:$req->ns_description;
        $ns->created_at = $date;
        $ns->updated_at = $date;
        $ns->update();
        return redirect()->route('list-articals')->with('success','Thêm mới thành công!');
    }

    public function actionActive($id){
        $ns = Artical::find($id);
        $ns->ns_active = 1;
        $ns->save();
        return redirect()->back()->with('success','Xử lý bài viết thành công !!!');
    }

    public function newDisplayClient(){
        $page_title = 'TIN TỨC MỚI NHẤT ';
        $ar = new Artical();
        $cat = new Category();
        $categories = $cat->getCategories();
        $data = $ar->getArticalClient();
        return view('news',[
            'page_title'=> $page_title,
            'data'=>$data,
            'categories'=>$categories,
        ]);
    }

    public function deleteArticals($id){
        $find = Artical::find($id);
        $find->deleteArticle($id);
        return redirect()->route('list-transactions')->with('success','Đã xoá đơn hàng !!!');
    }

}
