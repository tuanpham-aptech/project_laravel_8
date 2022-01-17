<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    public function profile_reverse(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
