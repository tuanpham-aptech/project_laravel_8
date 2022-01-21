<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CartInfoRequest;
use App\Coupon;
use Cart;
use App\Models\Transaction;
use App\Models\Product;
use App\Models\Order;
use App\Models\Category;

class CartController extends Controller
{
    public function addToCart(Request $req, $id){
        $product = Product::select('pro_name','id','pro_price','pro_quantity','pro_image','pro_sale')->find($id);
        $product_qty = $req->input('quantity');
        if($product->pro_quantity ==0){
            return redirect()->back()->with('warning',' Sản phẩm đã hết hàng mời bạn chọn sản phẩm khác!');
        }
        if(!$product) return redirect('/');
        $price = $product->pro_price;
        if($product->pro_sale){
            $price = $price * (100 - $product->pro_sale)/100;
        }
        // dd($product);
        \Cart::add([
            'id' => $product->id,
            'name' => $product->pro_name,
            'price' =>$price,
            'quantity' =>$product_qty > $product->pro_quantity ? $product->pro_quantity : $product_qty,
            'image' => $product->pro_image,
            'price_old'=>$product->pro_price,
            'sale'=>$product->pro_sale
        ]);

        return redirect()->back()->with('success','Mua hàng thành công !!!');
    }

    public function index(){
        $cat = new Category();
        $page_title = 'GIỎ HÀNG CỦA BẠN ';
        $categories = $cat->getCategories();
        $products = \Cart::getContent();
        // dd($products);
            return view('cart',[
                'products'=>$products,
                'categories'=>$categories,
                'page_title'=>$page_title
            ]);
    }

    public function getFormPayment(){
        $cat = new Category();
        $page_title = 'THÔNG TIN THANH TOÁN';
        $products = \Cart::getContent();
        $categories = $cat->getCategories();
            return view('form-payment',[
                'products'=>$products,
                'categories'=>$categories,
                'page_title'=>$page_title
            ]);
    }

    public function saveInfoShoppingCart(CartInfoRequest $req){
        $date = date('d-m-Y H:i:s');
        $totalMoney = \Cart::getSubTotal();
        $transactionId = Transaction::insertGetId([
            'tr_user_id'=>Auth::user()->id,
            'tr_total'=>(int)$totalMoney,
            'tr_note'=>$req->tr_note,
            'tr_address'=>$req->tr_address,
            'tr_phone'=>$req->tr_phone,
            'created_at'=>$date,
            'updated_at'=>$date,
        ]);

        if($transactionId){
            $products = \Cart::getContent();
            $date = date('Y-m-d H:i:s');
            foreach($products as $pro){
                Order::insert([
                    'or_transaction_id'=>$transactionId,
                    'or_product_id'    =>$pro->id,
                    'or_qty'           =>$pro->quantity,
                    'or_price'         =>$pro->price_old,
                    'or_sale'          =>$pro->sale,
                    'created_at'       =>$date,
                    'updated_at'       =>$date
                ]);
            }
        }
        \Cart::clear();
        return redirect()->route('home');
    }

    public function destroy($itemId) {
        \Cart::remove($itemId);
        return redirect()->back();

    }
}
