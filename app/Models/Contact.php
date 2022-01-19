<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';

    public function listContact(){
        return DB::table('contacts')->paginate(3);
    }

    public function deleteContact($id) {
        return DB::table('contacts')->where('id', $id)->delete();
    }

}
