<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';

    public function user(){
        return $this->belongsTo(User::class,'tr_user_id','id');
    }

    public function getDetailOrder($id){
        $data = DB::table('transactions')
            ->join('orders', 'transactions.id', '=', 'orders.or_transaction_id')
            ->join('products', 'products.id', '=', 'orders.or_product_id')
            ->where('transactions.id', $id)
            ->select('transactions.*', 'orders.*', 'products.*')
            ->get();
        return $data;
    }

    public function deleteArticle($id){
        return DB::table('transactions')
        ->where('transactions.id', $id)
        ->where('transactions.tr_status',1)
        ->delete();
    }
}
