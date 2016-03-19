<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class RadUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        

        $rad = [
            ['email' => 'rashadhossain@college.harvard.edu', 'first' => 'Rashad', 'last' => 'Hossain' ],
            ['email' => 'rauljordan@college.harvard.edu', 'first' => 'Raul', 'last' => 'Jordan' ],
            ['email' => 'timothybryant@college.harvard.edu', 'first' => 'Timothy', 'last' => 'Bryant' ],
            ['email' => 'matallah@college.harvard.edu', 'first' => 'Atallah', 'last' => 'Atallah' ],
            ['email' => 'catie@froth.nyc', 'first' => 'Catie', 'last' => 'Cole' ],
            ['email' => 'cthariani@college.harvard.edu', 'first' => 'Cameron', 'last' => 'Thariani' ],
            ['email' => 'benjylevin@college.harvard.edu', 'first' => 'Benjy', 'last' => 'Levin', "profile_picture" => "https://s3.amazonaws.com/alanacoolfilestorage/5018/me%20face.jpg" ],
            ['email' => 'matthewcarter@college.harvard.edu', 'first' => 'Matthew', 'last' => 'Carter' ],
            ['email' => 'antuantran@college.harvard.edu', 'first' => 'Antuan', 'last' => 'Tran' ],
            ['email' => 'bpleat@college.harvard.edu', 'first' => 'Benjamin', 'last' => 'Pleat' ],
            ['email' => 'ahashmi@college.harvard.edu', 'first' => 'Aleeza', 'last' => 'Hashmi' ],
            ['email' => 'spetteruti@college.harvard.edu', 'first' => 'Steven', 'last' => 'Petteruti' ],
            ['email' => 'priscillaguo@college.harvard.edu', 'first' => 'Priscilla', 'last' => 'Guo' ],
            ['email' => 'chasedavis@college.harvard.edu', 'first' => 'Chase', 'last' => 'Davis' ],
            ['email' => 'ondaatje01@college.harvard.edu', 'first' => 'Christian', 'last' => 'Ondaatje' ],
            ['email' => 'evanbrown@college.harvard.edu', 'first' => 'Evan', 'last' => 'Brown' ],
            ['email' => 'dpandya@college.harvard.edu', 'first' => 'Dhaivat', 'last' => 'Pandya' ],
            ['email' => 'akandola@college.harvard.edu', 'first' => 'Amanpreet', 'last' => 'Kandola' ],
            ['email' => 'evangastman@gmail.com', 'first' => 'Evan', 'last' => 'Gastman' ],
            ['email' => 'sabegunrin@college.harvard.edu', 'first' => 'Simone', 'last' => 'Abegunrin' ],
            ['email' => 'andrewjin@college.harvard.edu', 'first' => 'Andrew', 'last' => 'Jin' ],
            ['email' => 'ryanfortin@college.harvard.edu', 'first' => 'Ryan', 'last' => 'Fortin' ],
            ['email' => 'kristinaliang@college.harvard.edu', 'first' => 'Nicki', 'last' => 'Liang' ],
            ['email' => 'dinorodriguez@college.harvard.edu', 'first' => 'Dino', 'last' => 'Rodriguez' ],
            ['email' => 'rglover@college.harvard.edu', 'first' => 'Rory', 'last' => 'Glover' ],
            ['email' => 'dhurt@college.harvard.edu', 'first' => 'Deven', 'last' => 'Hurt' ],
            ['email' => 'adnanzaib@college.harvard.edu', 'first' => 'Adnan', 'last' => 'Zaib' ],
            ['email' => 'lim02@college.harvard.edu', 'first' => 'Leo', 'last' => 'Lim' ],
            ['email' => 'aharding@college.harvard.edu', 'first' => 'Alex', 'last' => 'Harding' ],
            ['email' => 'msyed@college.harvard.edu', 'first' => 'Milton', 'last' => 'Syed' ],
            ['email' => 'rpavuluri@college.harvard.edu', 'first' => 'Rohan', 'last' => 'Pavuluri' ],
            ['email' => 'kmakihara@college.harvard.edu', 'first' => 'Kazuma', 'last' => 'Makihara' ],
            ['email' => 'conorquinn@college.harvard.edu', 'first' => 'Rashad', 'last' => 'Hossain' ],
            ['email' => 'npatel@college.harvard.edu', 'first' => 'Neel', 'last' => 'Patel' ],
            ['email' => 'mperry01@college.harvard.edu', 'first' => 'Matthew', 'last' => 'Perry' ],
            ['email' => 'rking@college.harvard.edu', 'first' => 'Rahsaan', 'last' => 'King' ],   
            ['email' => 'jmartter@college.harvard.edu', 'first' => 'James', 'last' => 'Martter' ],
            ['email' => 'jordandegraaf@college.harvard.edu', 'first' => 'Jordan', 'last' => 'DeGraaf' ],
            ['email' => 'alexandrasmith00@gmail.com', 'first' => 'Lexi', 'last' => 'Smith' ],
            ['email' => 'ninahooper@college.harvard.edu', 'first' => 'Nina', 'last' => 'Hooper' ],
            ['email' => 'pbottino@seas.harvard.edu', 'first' => 'Paul', 'last' => 'Bottino' ]
        ];
        
        // create 50 people with registered accounts who are caregivers
        foreach($rad as $student)
        {
            // create user in user table
            $user = User::create([
                'first' => $student['first'],
                'last' => $student['last'],
                'name' => $student['first'] . " " . $student['last'],
                'email' => $student['email'],
                'password' => bcrypt('secret')
            ]);
            
            if (array_key_exists('profile_picture', $student)) 
            { 
                $user->profile_picture = $student['profile_picture'];
                $user->save();
            }
            
            // add roles of student to these users
            DB::table('users_roles')->insert([
                'user_id' => $user->id,
                'role_id' => '1'            
            ]);

            // add user to current cohort
            DB::table('cohorts_users')->insert([
                'user_id' => $user->id,
                'cohort_id' => '1'            
            ]);
            
        }
        
        
    }
}
