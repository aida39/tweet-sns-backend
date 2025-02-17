<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentsTableSeeder extends Seeder
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
            'post_id' => '1',
            'content' => 'コメント1',
        ];
        $comment = new Comment;
        $comment->fill($param)->save();

        $param = [
            'user_id' => '1',
            'post_id' => '1',
            'content' => 'コメント2',
        ];
        $comment = new Comment;
        $comment->fill($param)->save();

        $param = [
            'user_id' => '2',
            'post_id' => '1',
            'content' => 'コメント3',
        ];
        $comment = new Comment;
        $comment->fill($param)->save();
    }
}
