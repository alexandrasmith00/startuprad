<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
use App\Models\Role;
use App\Models\Blog\Post;

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
               
        // get ids of contributors
        $contributors = User::whereHas(
            'roles', function($r){
                $r->where('name', 'Contributor');
            }
        )->lists('id')->toArray();
                        
        // create 100 posts in posts table
        foreach(range(1, 80) as $index)
        {
            $post = Post::create([
                'title' => $faker->sentence(mt_rand(3, 10)),
                'content' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
                'published_at' => $faker->dateTimeBetween('-1 month', '+3 days'),
                'user_id' =>  $faker->randomElement($contributors)
            ]);
        }

    }
}
