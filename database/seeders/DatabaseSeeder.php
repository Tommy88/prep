<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'title 1',
                'text' => 'text text text 1',
                'slug' => 'post-1',
                'likes' => 1,
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'title' => 'title 2',
                'text' => 'text text text 2',
                'slug' => 'post-2',
                'likes' => 2,
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'title' => 'title 3',
                'text' => 'text text text 3',
                'slug' => 'post-3',
                'likes' => 3,
                'created_at' => date("Y-m-d H:i:s"),
            ],
        ]);
        DB::table('users')->insert([
            [
                'name' => 'name 1',
                'email' => 'email_1@mail.ru',
                'age' => 11,
                'salary' => 1000,
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'name 2',
                'email' => 'email_2@mail.ru',
                'age' => 22,
                'salary' => 2000,
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'name 3',
                'email' => 'email_3@mail.ru',
                'age' => 33,
                'salary' => 3000,
                'created_at' => date("Y-m-d H:i:s"),
            ],
        ]);

    }
}
