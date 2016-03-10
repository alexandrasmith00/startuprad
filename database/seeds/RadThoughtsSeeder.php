<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Team;
use App\Models\Idea;
use App\Models\User;
use App\Models\Thinking;

class RadThoughtsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thinkings = [
            
            ['FROTH', 'name', 'FROTH'], 
            ['FROTH', 'tagline', 'First Round On The House'], 
            ['FROTH', 'site', 'www.froth.nyc'], 
            ['FROTH', 'logo', 'https://s3.amazonaws.com/alanacoolfilestorage/5002/Froth logo.jpg'], 
            ['FROTH', 'legalStatus', 'S-Corp'], 
            ['FROTH', 'lawyers', 'Spencer Wolff'], 
            ['FROTH', 'equitySplit', 'Legal'], 
            ['FROTH', 'debtEquity', 'No'], 
            ['FROTH', 'vestingSchedule', 'Scheduled'], 
            ['FROTH', 'fundingRound', 'Bootstrapping'], 
            ['FROTH', 'slideDeck', 'https://docs.google.com/document/d/1lymE5tfAD7GesZHC8NGS1END6_SufxaAvJ-8FhmZg64/pub?embedded=true'], 
            ['FROTH', 'slideDeck', 'https://docs.google.com/document/d/1XXACIe9sMNX7PL6RakTZgR6dpgSLg5xtJbvZGllKaBQ/pub?embedded=true'], 
            ['FROTH', 'facebook', 'https://www.facebook.com/frothedup/?ref=aymt_homepage_panel'], 
            ['FROTH', 'linkedIn', 'https://www.linkedin.com/company/10316450?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10316450%2Cidx%3A2-1-7%2CtarId%3A1455165468182%2Ctas%3Afroth'], 
            ['FROTH', 'teamMembers', '["Co-Founder", "Catie Cole"]'], 
            ['FROTH', 'teamMembers', '["Co-Founder", "Harry Lee"]'], 
            ['FROTH', 'teamMembers', '["Co-Founder", "Daewon Lim"]'], 
            ['FROTH', 'description', 'FROTH is an application-based drinks subscription service, through which our members can explore and experience cool bars in New York City in a smarter way'], 
        ];
        
        foreach ($thinkings as $thinking)
        {            
            $idea = Idea::where('name', $thinking[0])->first();
            
            $category = DB::table('categories')->where('name', $thinking[1])->first();
            
            // for the idea, add a default thinking for each category
            $new_name = Thinking::create([
                'category_id' => $category->id,
                'idea_id' => $idea->id,
                'body' => $thinking[2],
                'current' => true
            ]);
            
            DB::table('ideas')
                ->where('id', $idea->id)
                ->update(array($category->name => $thinking[2]));
        }
//        foreach ($teams as $name => $team)
//        {
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
//        }

    }
}