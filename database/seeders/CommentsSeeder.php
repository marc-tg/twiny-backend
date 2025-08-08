<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    public function run()
    {
        DB::table('comments')->insert([
            [
                'post_id' => 1,
                'user_id' => 2,
                'comment' => 'Muy buen post!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => 2,
                'user_id' => 1,
                'comment' => 'Gracias por compartir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
