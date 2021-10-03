<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'name' => '高橋康之',
                'birthday' => '1993-2-22',
                'age' => '34',
                'birthplace_id' => '5',
                'sex' => '男',
                'comment' => '温厚な性格',
                'image' => 'https://blogimg.goo.ne.jp/user_image/17/34/5f98377a3b90794c9959ef8831c6e90b.jpg',
                
            ],
            [
                'name' => '田中康之',
                'birthday' => '1988-4-6',
                'age' => '32',
                'birthplace_id' => '6',
                'sex' => '男',
                'comment' => '激しい性格',
                'image' => 'https://blogimg.goo.ne.jp/user_image/17/34/5f98377a3b90794c9959ef8831c6e90b.jpg',
            ],
        ]);
    }
}
