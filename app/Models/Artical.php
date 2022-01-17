<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Artical extends Model
{
    use HasFactory;
    protected $table = 'articals';

    public function getArticalClient() {
        return DB::select('select ns_name,ns_content,ns_image from articals where ns_active =1 order by rand() limit 3');
    }

    public function deleteArticle($id){
        return DB::table('articals')->where('id', $id)->delete();
    }
}
