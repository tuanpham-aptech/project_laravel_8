<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAll() {
        $data = DB::table('users')->paginate(3);
        return $data;
    }

    public function getStrType() {
        $permissionMapping = array_flip(config('permission'));
        return $permissionMapping[$this->status];
    }

    public function deleteUser($id) {
        return DB::table('users')->where('id', $id)->delete();
    }

    public function profile(){
        return $this->hasOne(Profile::class,'user_id','id');
    }

    public function statistical($table) {
        return DB::table($table)
        ->select('id')
        ->get()->count();
    }
}
