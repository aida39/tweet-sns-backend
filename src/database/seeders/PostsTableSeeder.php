<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => '1',
            'content' => 'ポスト1',
        ];
        $comment = new Post;
        $comment->fill($param)->save();

        $param = [
            'user_id' => '2',
            'content' => 'ポスト2',
        ];
        $comment = new Post;
        $comment->fill($param)->save();

        $param = [
            'user_id' => '1',
            'content' => 'ポスト3',
        ];
        $comment = new Post;
        $comment->fill($param)->save();
    }
}
