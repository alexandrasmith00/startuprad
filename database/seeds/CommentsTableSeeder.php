<?php

use Illuminate\Database\Seeder;
use Slynova\Commentable\Models\Comment;
use Faker\Factory as Faker;

use App\Models\Post;
use App\Models\User;


class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // add nested comments to all posts!
        
        $faker = Faker::create();

        $posts = Post::get();
        $users = User::get()->lists('id')->toArray();
        $commenters = $faker->randomElements($users, $count = 3);

        
        foreach ($posts as $post)
        {
            $comment1 = $post->comments()->create(['body' => 'Is it really working?', 'user_id' => $commenters[0] ]);
            $comment2 = $post->comments()->create(['body' => 'Wow this is awesome!', 'user_id' => $commenters[1] ]);
            $comment3 = Comment::create(['body' => "Yes, and it's easy to use", 'user_id' => $commenters[0] ]);
            $comment3->makeChildOf($comment1);
            $comment4 = Comment::create(['body' => 'Thanks! :)', 'user_id' => $commenters[2]]);
            $comment4->makeChildOf($comment2);
            $comment5 = Comment::create(['body' => "You're a little bit psycho no?", 'user_id' => $commenters[1]]);
            $comment5->makeChildOf($comment4);
        }



    }
}