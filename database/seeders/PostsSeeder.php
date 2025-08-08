<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'title' => 'Primer post',
                'content' => 'Contenido del primer post',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'title' => 'Segundo post',
                'content' => 'Contenido del segundo post',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
