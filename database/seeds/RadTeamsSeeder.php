<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Team;
use App\Models\Idea;
use App\Models\User;
use App\Models\Thinking;

class RadTeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $teams = [
            'Keepspace' => ['rashadhossain@college.harvard.edu', 'akandola@college.harvard.edu'],
            'Kynplex' => ['rauljordan@college.harvard.edu'],
            'MedKit' => ['timothybryant@college.harvard.edu', 'sabegunrin@college.harvard.edu', 'dhurt@college.harvard.edu'],
            'Voco' => ['matallah@college.harvard.edu'],
            'FROTH' => ['catie@froth.nyc'],
            'Captia' => ['cthariani@college.harvard.edu', 'evanbrown@college.harvard.edu'],
            'StreamerStores' => ['benjylevin@college.harvard.edu'],
            'MindTime' => ['matthewcarter@college.harvard.edu','rglover@college.harvard.edu'],
            'Code Red' => ['antuantran@college.harvard.edu', 'evangastman@gmail.com'],
            'Doorbell' => ['bpleat@college.harvard.edu', 'ahashmi@college.harvard.edu', 'spetteruti@college.harvard.edu'],
            'Tealy' => ['priscillaguo@college.harvard.edu'],
            'The Wolfe' => ['dinorodriguez@college.harvard.edu', 'chasedavis@college.harvard.edu','ondaatje01@college.harvard.edu'],
            'Lunos' => ['dpandya@college.harvard.edu','andrewjin@college.harvard.edu'],
            'Drizl' => ['ryanfortin@college.harvard.edu', 'lim02@college.harvard.edu'],
            'Capsul' => ['kristinaliang@college.harvard.edu', 'conorquinn@college.harvard.edu', 'kmakihara@college.harvard.edu'],
            'LuvAgent' => ['adnanzaib@college.harvard.edu'],
            'Ambasity' => ['aharding@college.harvard.edu'],
            'Staketrak' => ['msyed@college.harvard.edu', 'rpavuluri@college.harvard.edu'],
            'Datanautix' => ['npatel@college.harvard.edu'],
            'Trignis' => ['mperry01@college.harvard.edu','jordandegraaf@college.harvard.edu', 'jmartter@college.harvard.edu'],
            'Students of Strength' => ['rking@college.harvard.edu']
        ];
        
        
        foreach ($teams as $name => $team)
        {
            
            $idea = Idea::create([
                'name' => $name
            ]);
            
            $new_team = Team::create([
                'idea_id' => $idea->id
            ]);


            foreach ($team as $member)
            {
                $user = User::where('email', $member)->first();

                DB::table('teams_users')->insert([
                    'user_id' => $user->id,
                    'team_id' => $new_team->id           
                ]);
                
                DB::table('users')
                    ->where('id', $user->id)
                    ->update(array('idea_id' => $idea->id));
                
            }

        
            
            // add idea to current cohort
            DB::table('cohorts_ideas')->insert([
                'idea_id' => $idea->id,
                'cohort_id' => '1'            
            ]);
            
        }
        


//            
//            $name = $faker->company;
//            $tagline = $faker->catchPhrase;
//            $website = $faker->url;
//            $logo = $faker->imageUrl($width = 200, $height = 200);
//            

            

            
            
//            
//            
//            
//            
//             
//            // for the idea, add a default thinking for each category
//            $new_name = Thinking::create([
//                'category_id' => '1',
//                'idea_id' => $idea->id,
//                'body' => $name,
//                'current' => true
//            ]);
//                
//            $new_tagline = Thinking::create([
//                'category_id' => '2',
//                'idea_id' => $idea->id,
//                'body' => $tagline,
//                'current' => true
//            ]);
//            
//            $new_website = Thinking::create([
//                'category_id' => '3',
//                'idea_id' => $idea->id,
//                'body' => $website,
//                'current' => true
//            ]);
//            
//            $new_logo = Thinking::create([
//                'category_id' => '4',
//                'idea_id' => $idea->id,
//                'body' => $logo,
//                'current' => true
//            ]);
//            

            

//        }

    }
}