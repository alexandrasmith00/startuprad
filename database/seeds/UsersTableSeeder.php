<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        // create 50 people with registered accounts who are caregivers
        foreach(range(1, 80) as $index)
        {
            $first = $faker->firstName;
            $last = $faker->lastName;
            // create user in user table
            $user = User::create([
                'first' => $first,
                'last' => $last,
                'name' => $first . " " . $last,
                'email' => $first . $last . "@gmail.com",
                'password' => bcrypt('secret')
            ]);
            
            // add roles of account holder to user roles
            DB::table('users_roles')->insert([
                'user_id' => $user->id,
                'role_id' => '3'            
            ]);
            
            // add roles of caregiver to 50 users
            if ($index < 50) 
                DB::table('users_roles')->insert([
                    'user_id' => $user->id,
                    'role_id' => '2'            
                ]);
            
            // add roles of care recipient to 25 users
            if ($index > 50 && $index < 75)
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
