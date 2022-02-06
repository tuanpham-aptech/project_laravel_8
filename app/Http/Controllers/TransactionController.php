<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use App\Http\Requests\ProductRequest;
// use Barryvdh\DomPDF\Facade as PDF;
use PDF;

class TransactionController extends Controller
{
    //
    public function index(){
        $transactions = Transaction::paginate(4);
        $page_title = 'THÔNG TIN ĐƠN HÀNG ';
        return view('admin.transactions.transactions',[
            'page_title'=>$page_title,
            'transactions'=>$transactions
        ]);
    }

    public function viewOrder(Request $req,$id){
        $ts = new Transaction();
        $page_title ='Chi tiết đơn hàng ';
        $transactions = $ts->getDetailOrder($id);
        // dd($transactions);
        // $transactions = Transaction::where('id',$id)->get();
       return view('admin.transactions.view-detail-order',[
           'transactions'=>$transactions,
           'page_title'=>$page_title
       ]);
    }

    public function billOrder($id){
        $ts = new Transaction();
        $transactions = $ts->getDetailOrder($id);
        $data = [
           'transactions'=>$transactions
        ];
        $pdf = PDF::loadView('admin.invoice-order', $data)->setOptions(['defaultFont' => 'vietnamese']);
        // dd($pdf);
        return $pdf->download('invoice.pdf');
    }

    public function deleteItemOrder($id){
        $ts= Transaction::find($id);
        $ts->deleteItemOrder($id);
        return redirect()->route('list-transactions')->with('success','Đã xoá đơn hàng thành công  !');
    }
    // xử  lý trạng thái đơn hàng
    public function actionTransaction($id){
        $transactions = Transaction::find($id);
        $orders = Order::where('or_transaction_id',$id)->get();
        if($orders){
            foreach($orders as $order){
                $product = Product::find($order->or_product_id);
                $product->pro_quantity = $product->pro_quantity - $product->pro_qty;
                $product->pro_pay ++;
                $product->save();
            }
        }
        // cập nhật trạng thái
        $transactions->tr_status = 1;
        $transactions->save();
        return redirect()->back()->with('success','Xử lý đơn hàng thành công !!!');
    }
}
