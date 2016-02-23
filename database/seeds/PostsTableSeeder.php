<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
use App\Models\Role;
use App\Models\Post;
use App\Models\Idea;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        // get thinkings for each thinking update, create a post
        // make a couple rad now posts
        // make a couple questions
        
//        idea_id (subject)
//        user_id (poster)
        


        $users = User::get()->lists('id')->toArray();
        $ideas = Idea::get()->lists('id')->toArray();
    
        // create 100 posts in posts table
        foreach(range(1, 80) as $index)
        {
    
            $post = Post::create([
                'user_id' => $faker->randomElement($users),
                'idea_id' => $faker->randomElement($ideas),
                'title' => $faker->sentence(),
                'content' => $faker->paragraph(),
                'type'=> 'random'
            ]);
        }

    }
}
