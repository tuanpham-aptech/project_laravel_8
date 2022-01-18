<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        $page_title = 'THÔNG TIN LIÊN HỆ';
        return view('admin.contacts.contacts',[
            'page_title'=>$page_title,
            'contacts'=>$contacts
        ]);
    }

    public function actionActive($id){
        $c = Contact::find($id);
        $c->c_status = 1;
        $c->save();
        return redirect()->back()->with('success','Xử lý bài viết thành công !!!');
    }

    public function showFormContact(){
        $cat = new Category();
        $page_title = 'THÔNG TIN LIÊN HỆ CHỦ CỬA HÀNG ';
        $categories = $cat->getCategories();
            return view('contact',[
                'categories'=>$categories,
                'page_title'=>$page_title
            ]);
    }

    public function saveContact (ContactRequest $req) {
        $con = new Contact();
        $date = date('Y-m-d H:i:s');
        $con->c_name = $req->c_name;
        $con->c_email = $req->c_email;
        $con->c_title = $req->c_title;
        $con->c_content = $req->c_description;
        $con->created_at = $date;
        $con->updated_at = $date;
        $con->save();
        return redirect()->route('contact');
    }

    public function deleteContact($id) {
        $deleteItem = Contact::find($id);
        $deleteItem->deleteContact($id);
        return redirect()->route('list-contacts')->with('success','Xoá thành công liên hệ ');
    }

}
