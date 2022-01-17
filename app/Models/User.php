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
        $data = DB::select('select * from users');
        return $data;
    }
    // hàm lấy về tring type vì ta đã có số giờ muốn trả về sâu kí tự cơ ví dụ 1 trả về admin 2 trả về member 3 trả về editor
    // khi đó ta dự vào permission.php trong folder config bằng cách lúc này dùng hàm array_flip() để đảo key thành value và value thành key và truyền vào hàm config() lấy giá trị từ config bằng cách truyền file permission
    public function getStrType() {
        $permissionMapping = array_flip(config('permission'));
        // trong đó this đại diện cho người dùng hiện tại và status là trường trong bảng user của database trong đó $this->status là lấy số của người dùng hiện tại
        return $permissionMapping[$this->status];
    }

    public function deleteUser($id) {
        return DB::table('users')->where('id', $id)->delete();
    }

    public function profile(){
        return $this->hasOne(Profile::class,'user_id','id');
    }
}
