<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'user_id' => 1,
                'title' => 'note a',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
            ],
            [
                'user_id' => 1,
                'title' => 'note b',
                'content' => 'Magni mollitia similique, aspernatur quo, iure accusamus, consequatur amet officia praesentium doloribus eum!'
            ],
            [
                'user_id' => 2,
                'title' => 'note c',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
            ],
            [
                'user_id' => 1,
                'title' => 'note d',
                'content' => 'Doloremque placeat a id quibusdam, atque ducimus minima quo quae distinctio non accusamus suscipit iure, repellat praesentium nesciunt.'
            ],
            [
                'user_id' => 2,
                'title' => 'note e',
                'content' => 'Ipsum, nulla beatae minus quae nobis necessitatibus voluptatem, explicabo ea, temporibus numquam tempora quia molestiae earum impedit eum.'
            ],
        ];

        DB::table('posts')->insert($posts);
    }
}
