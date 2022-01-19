<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';

    public function getCategories(){
        $data = DB::table('categories')->paginate(3);
        return $data;
    }

    public function deleteCategory($id) {
        return DB::table('categories')->where('id', $id)->delete();
    }

    public function product(){
        return $this->hasMany(Product::class, 'pro_category_id','id');
    }
}
