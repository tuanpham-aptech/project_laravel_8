<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0; $i <10;$i++){
            Db::table('posts')->insert([
                'userid'=>rand(100,999999999999),
                'title'=>Str::random(10),
                'description'=>Str::random(100),
                'hasImage'=>rand(0,1),
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),

            ]);
        }
    }
}
