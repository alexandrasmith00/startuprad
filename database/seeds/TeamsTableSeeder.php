<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Team;
use App\Models\Idea;
use App\Models\User;
use App\Models\Thinking;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        // get ids of users
        $users = User::get()->lists('id')->toArray();
               
        // create 50 teams with 50 ideas
        foreach(range(1, 50) as $index)
        {
            $team = Team::create();
            
            $team_members = $faker->randomElements($users, $count = 3);
            
            foreach($team_members as $member)
            {
                DB::table('teams_users')->insert([
                    'user_id' => $member,
                    'team_id' => $team->id           
                ]);
            }
            
            $name = $faker->company;
            $tagline = $faker->catchPhrase;
            $website = $faker->url;
            $logo = $faker->imageUrl($width = 200, $height = 200);
            
            $idea = Idea::create([
                'name' => $name,
                'tagline' => $tagline,
                'website' => $website,
                'logo' => $logo
            ]);
            
            foreach($team_members as $member)
            {
                DB::table('users')
                    ->where('id', $member)
                    ->update(array('idea_id' => $idea->id));
            }
            
            DB::table('teams_ideas')->insert([
                'idea_id' => $idea->id,
                'team_id' => $team->id           
            ]);    
             
            // for the idea, add a default thinking for each category
            $new_name = Thinking::create([
                'category_id' => '1',
                'idea_id' => $idea->id,
                'body' => $name,
                'current' => true
            ]);
                
            $new_tagline = Thinking::create([
                'category_id' => '2',
                'idea_id' => $idea->id,
                'body' => $tagline,
                'current' => true
            ]);
            
            $new_website = Thinking::create([
                'category_id' => '3',
                'idea_id' => $idea->id,
                'body' => $website,
                'current' => true
            ]);
            
            $new_logo = Thinking::create([
                'category_id' => '4',
                'idea_id' => $idea->id,
                'body' => $logo,
                'current' => true
            ]);
            
            // add idea to current cohort
            DB::table('cohorts_ideas')->insert([
                'idea_id' => $idea->id,
                'cohort_id' => '1'            
            ]);
            

        }

    }
}
