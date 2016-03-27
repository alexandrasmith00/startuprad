<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Team;
use App\Models\Idea;
use App\Models\Post;
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
             ['FROTH', 'teamMembers', 'Co-Founder'], 
             ['FROTH', 'teamMembers', 'Catie Cole'], 
             ['FROTH', 'teamMembers', 'Harry Lee'], 
             ['FROTH', 'teamMembers', 'Co-Founder'], 
             ['FROTH', 'teamMembers', 'Daewon Lim'], 
             ['FROTH', 'description', 'FROTH is an application-based drinks subscription service, through which our members can explore and experience cool bars in New York City in a smarter way'], 
             ['FROTH', 'legalStatus', 'C-Corp'], 
             ['Captia', 'name', 'Captia'], 
             ['Captia', 'site', 'N/A'], 
             ['Captia', 'description', 'Collaborative video montage platform'], 
             ['Captia', 'teamMembers', 'Co-Founder'], 
             ['Captia', 'teamMembers', 'Cameron Thariani'], 
             ['Captia', 'teamMembers', 'Co-Founder'], 
             ['Captia', 'teamMembers', 'Evan Brown'], 
             ['Captia', 'logo', 'https://s3.amazonaws.com/alanacoolfilestorage/5006/RoughLogo1.jpg'], 
             ['Captia', 'teamMembers', 'Co-Founder'], 
             ['Captia', 'teamMembers', 'Henry Arrowood'],
             ['Captia', 'customerName', 'College and High School Students'], 
             ['Captia', 'customerNeed', 'To create medium/high-quality videos in groups'], 
             ['Captia', 'customerMeet', 'A platform to easily realize that goal and be engaged and entertained in the process'], 

             ['Captia', 'tagline', 'We make videos for you'], 
             ['Captia', 'tagline', 'Capture Memories Together'], 
             ['Captia', 'tagline', 'Capture Memories Together'], 
             ['Captia', 'tagline', 'Capture Memories Together'], 
             ['Captia', 'tagline', 'Capture Memories Together'], 
             ['StreamerStores', 'name', 'StreamerStores'], 
             ['StreamerStores', 'tagline', 'Live Stores for Live Streams'], 
             ['StreamerStores', 'description', 'An online e-commerce platform that allows video gamer streamers on Twitch.tv to live-sell merchandise to their viewers.'], ['StreamerStores', 'teamMembers', 'Founder'], 
             ['StreamerStores', 'teamMembers', 'Benjy'], 
             ['StreamerStores', 'teamMembers', 'https://s3.amazonaws.com/alanacoolfilestorage/5018/me face.jpg'], 
             ['StreamerStores', 'description', 'An online e-commerce platform that allows video game streamers on Twitch.tv to live-sell merchandise to their viewers.'], 
             ['StreamerStores', 'description', 'An online e-commerce platform that allows video game streamers on Twitch.tv to live-sell merchandise to their viewers.'], 
             ['MindTime', 'name', 'MindTime'], 
             ['MindTime', 'teamMembers', 'Rory Glover'], 
             ['MindTime', 'teamMembers', 'Co-Founder / CEO'], 
             ['MindTime', 'teamMembers', 'https://s3.amazonaws.com/alanacoolfilestorage/5003/3d6714_07a675b60bcf47e8816fd8a9f9d7b6cc.jpg'], 
             ['MindTime', 'site', 'N/A'], 
             ['MindTime', 'teamMembers', 'Matthew Carter'], 
             ['MindTime', 'teamMembers', 'Co-Founder / CTO'],
             ['MindTime', 'teamMembers', 'https://s3.amazonaws.com/alanacoolfilestorage/5004/3d6714_a19993a6be324f2b917adcbd498c1e7a-2.png'],    
             ['MindTime', 'logo', 'https://s3.amazonaws.com/alanacoolfilestorage/5017/mindtree.png'], 
             ['MindTime', 'description', 'A mobile-first software to help employees monitor and improve their happiness'], 
             ['MindTime', 'tagline', 'Have fun, be happy, get insight'], 
             ['MindTime', 'slideDeck', 'https://docs.google.com/document/d/1YYRhnTELlmjtgWwR90eFVUA2NBjtp2iZyxtRnca9loo/pub?embedded=true'], 
             ['MindTime', 'customerName', 'Employees'], 
             ['MindTime', 'customerNeed', 'A way to increase their mental well-being'],
             ['MindTime', 'customerMeet', 'Gamified CBT and insights'], 
             ['MindTime', 'customerResult', 'Happiness, fun and feedback'], 

            ['Code Red', 'name', 'Code Red'], ['Code Red', 'tagline', 'Making learning social'], ['Code Red', 'teamMembers', 'Evan Gastman'], ['Code Red', 'teamMembers', 'Co-founder'], ['Code Red', 'teamMembers', 'Co-founder'], ['Code Red', 'teamMembers', 'Antuan Tran'], ['Code Red', 'description', 'Yo-like method of saving "Aha!" moments.'], ['Doorbell', 'description', 'Doorbell helps transform any building into a community'], ['Doorbell', 'name', 'Doorbell'], ['Doorbell', 'site', 'Doorbell.me'], ['Doorbell', 'tagline', 'Share community with your peers'], ['Doorbell', 'logo', 'https://s3.amazonaws.com/alanacoolfilestorage/5005/Screen Shot 2016-02-08 at 10.37.02 AM.png'],  ['Doorbell', 'tagline', 'Share community with your neighbors'], ['Doorbell', 'teamMembers', 'Ben'], ['Doorbell', 'teamMembers', 'Aleeza'], ['Doorbell', 'teamMembers', 'Patrick'], ['Doorbell', 'teamMembers', 'Steven'], ['Doorbell', 'tagline', 'Doorbell makes it ridiculously easy to  share goods, services, and experiences with your neighbors'], ['Doorbell', 'description', 'Doorbell transforms any building into a community'], ['Tealy', 'name', 'Tealy'], ['Tealy', 'teamMembers', 'Priscilla Guo'], ['Tealy', 'teamMembers', 'Founder & CEO'], ['Tealy', 'description', 'Tealy is a subscription box for teas from all around the world.'], ['Tealy', 'description', 'Tealy is a monthly subscription box for teas from all around the world.'], ['Tealy', 'tagline', 'Time for Tealy'], ['Tealy', 'tagline', 'Unique Tea Each Time'], ['MedKit', 'name', 'MedKit'], ['MedKit', 'logo', 'https://s3.amazonaws.com/alanacoolfilestorage/5019/medkit logo real.v1.nobg.png'], ['MedKit', 'teamMembers', 'Deven'], ['MedKit', 'teamMembers', 'CEO'], ['MedKit', 'teamMembers', 'CSO'], ['MedKit', 'teamMembers', 'Tim'], ['MedKit', 'teamMembers', 'CDO'], ['MedKit', 'teamMembers', 'Simone'], ['MedKit', 'teamMembers', 'CMO'], ['MedKit', 'teamMembers', 'Ernie'], ['MedKit', 'teamMembers', 'CTO'], ['MedKit', 'teamMembers', 'Mehrab'], ['MedKit', 'teamMembers', 'COO'], ['MedKit', 'teamMembers', 'Brad'], ['MedKit', 'tagline', 'Healthcare for the 21st Century'], ['MedKit', 'description', 'Electronic Medical Records Platform'], ['The Wolfe', 'name', 'The Wolfe'], ['The Wolfe', 'site', 'thewolfe.io'], ['The Wolfe', 'tagline', 'Modular Graphics'], ['The Wolfe', 'description', 'We are giving the power of desktops to the people of laptops'], ['The Wolfe', 'description', 'We are giving the power of desktops to the people of laptops.'], ['The Wolfe', 'teamMembers', 'Chase Davis'], ['The Wolfe', 'teamMembers', 'https://s3.amazonaws.com/alanacoolfilestorage/5010/chase.png'], ['The Wolfe', 'teamMembers', 'CxO'], ['The Wolfe', 'logo', 'https://s3.amazonaws.com/alanacoolfilestorage/5007/Wolfe_green.png'], ['The Wolfe', 'teamMembers', 'Christian Ondaatje'], ['The Wolfe', 'teamMembers', 'https://s3.amazonaws.com/alanacoolfilestorage/5008/christian.png'], ['The Wolfe', 'teamMembers', 'CxO'], ['The Wolfe', 'teamMembers', 'Dino Rodriguez'], ['The Wolfe', 'teamMembers', 'https://s3.amazonaws.com/alanacoolfilestorage/5009/dino.png'], ['The Wolfe', 'teamMembers', 'CxO'],  ['The Wolfe', 'description', 'The power of desktops to the people of laptops'], ['The Wolfe', 'description', 'The power of desktops for the people of laptops'],  ['The Wolfe', 'tagline', 'Desktop-Level Graphics on your Laptop'], ['The Wolfe', 'tagline', 'Desktop-Level Graphics on your Laptop'], ['The Wolfe', 'customerName', 'Gamers'], ['The Wolfe', 'customerNeed', 'Laptop gaming'], ['Keepspace', 'name', 'Keepspace'], ['Keepspace', 'site', 'thekeepspace.com'], ['Keepspace', 'tagline', "Don't let today disappear"], ['Keepspace', 'description', 'We are a social media startup that turns your moments into memories.'],['Keepspace', 'teamMembers', 'Rashad'], ['Keepspace', 'teamMembers', 'Gunnery Sergeant'], ['Keepspace', 'teamMembers', 'Master Gunnery Sergeant'], ['Keepspace', 'teamMembers', 'Aman'], ['Keepspace', 'logo', 'https://s3.amazonaws.com/alanacoolfilestorage/5027/keepspace blue.png'], ['Keepspace', 'description', 'We are a social media platform for people to discover and save the moments that make every day unique.'], ['Keepspace', 'description', 'We are a social media startup that helps you turn moments into memories.'], ['Keepspace', 'description', 'We are a social journal.'], ['Keepspace', 'legalStatus', 'LLC'], ['Keepspace', 'description', 'We are a social journaling platform that empowers mindfulness'], ['Keepspace', 'description', 'We are a social journaling platform that empowers people to be mindful'], ['Keepspace', 'description', 'We are a social journaling platform where people discover and collect the unique moments present in every day.'], ['Lunos', 'name', 'Lunos'], ['Lunos', 'description', 'Music promotion through DJs'], ['Lunos', 'site', 'http://www.lunosmusic.com/'], ['Lunos', 'logo', 'https://s3.amazonaws.com/alanacoolfilestorage/5015/LunosLogo.png'], ['Lunos', 'teamMembers', 'Cofounder'], ['Lunos', 'teamMembers', 'Andrew Jin'], ['Lunos', 'teamMembers', 'https://s3.amazonaws.com/alanacoolfilestorage/5016/Andrew.png'], ['Lunos', 'teamMembers', 'Cofounder'], ['Lunos', 'teamMembers', 'Dhaivat Pandya'], ['Lunos', 'description', 'Targeted, data-driven music promotion through DJs'], ['Lunos', 'description', 'Targeted, data-driven music promotion through DJs'], ['Lunos', 'description', 'Targeted, data-driven music promotion through DJs'], ['Lunos', 'tagline', 'Targeted, data-driven music promotion through DJs'], ['Lunos', 'description', 'Lunos allows record labels and artists to launch large-scale, targeted campaigns to get their music heard at live venues like nightclubs & college parties'], ['Lunos', 'description', 'Lunos allows record labels & artists to launch large-scale, targeted campaigns to get their music heard at live venues like nightclubs & college parties.'], ['Lunos', 'debtEquity', 'No'], ['Lunos', 'equitySplit', 'Informal'], ['Lunos', 'slideDeck', 'https://docs.google.com/document/d/1n9ldUfTq90aTJyf0zxHFdubkCf7NcGuwxI4mVYf-RZs/pub?embedded=true'], ['Lunos', 'description', 'Lunos allows record labels and artists to launch large-scale, targeted campaigns to get their music heard at live venues like nightclubs & college parties'], ['Lunos', 'site', 'http://www.lunosmusic.com/'], ['Drizl', 'name', 'Drizl'], ['Drizl', 'site', 'getdrizl.com'], ['Drizl', 'logo', 'https://s3.amazonaws.com/alanacoolfilestorage/5014/Drizl_Logo.png'], ['Drizl', 'tagline', 'Smart Savings.'], ['Drizl', 'description', 'Drizl is a mobile savings application designed to help provide users with a side stash of tangible savings as well as an understanding of spending habits.'], ['Drizl', 'description', 'Drizl is a mobile savings application designed to help provide users with a side stash of funds as well as a better understanding of spending habits.'], ['Drizl', 'teamMembers', 'Founder and CEO'], ['Drizl', 'teamMembers', 'Ryan Fortin'], ['Drizl', 'teamMembers', 'Leo Lim'], ['Drizl', 'description', 'Drizl is a mobile application designed to help users make conscious decisions based on analysis of their spending habits.'], ['Drizl', 'tagline', 'Should I buy this?'], ['Capsul', 'name', 'Capsul'], ['Capsul', 'description', 'Location-based video sharing app'], ['Capsul', 'tagline', 'See the past'], ['Capsul', 'teamMembers', 'Founder'], ['Capsul', 'teamMembers', 'Nicki Liang'], ['Capsul', 'teamMembers', 'Founder'], ['Capsul', 'teamMembers', 'Kazuma Makihara'], ['Capsul', 'teamMembers', 'Founder'], ['Capsul', 'teamMembers', 'Conor Quinn'], ['Capsul', 'tagline', 'See the past, Live the present, Be the future'], ['Capsul', 'logo', 'https://s3.amazonaws.com/alanacoolfilestorage/5032/capsulPurpleLogo.png'], ['LuvAgent', 'name', 'LuvAgent'], ['LuvAgent', 'tagline', 'Curate blind dates for your friends!'], ['LuvAgent', 'site', 'luvagent.com'], ['LuvAgent', 'teamMembers', 'Adnan'], ['LuvAgent', 'teamMembers', 'Founder'], ['LuvAgent', 'teamMembers', 'Phuc'], ['LuvAgent', 'teamMembers', 'Founder'], ['LuvAgent', 'description', 'Luv Agent is an online matching service that allows friends find each other dates.'], ['Staketrak', 'name', 'Staketrak'], ['Staketrak', 'description', 'We are a simple CRM designed for small government officials'], ['Staketrak', 'site', 'staketrak.us'],['Staketrak', 'logo', 'https://s3.amazonaws.com/alanacoolfilestorage/5028/staketrak-logo-blue-background.png'], ['Staketrak', 'tagline', 'Track the Relationships that Matter to Your Case, Cause, or Community'], ['Staketrak', 'slideDeck', 'https://docs.google.com/document/d/1R2golpBCf6Kov1l8n1IMRsN840bqi_v54GrtLoDQFFY/pub?embedded=true'],  ['Staketrak', 'teamMembers', 'Rohan Pavuluri'], ['Staketrak', 'teamMembers', 'Syed'], ['Staketrak', 'teamMembers', 'Milton'], ['Ambasity', 'name', 'Ambasity'], ['Ambasity', 'description', 'A portal that connects companies trying to grow their brands at events with reliable people to staff them'], ['Ambasity', 'logo', 'https://s3.amazonaws.com/alanacoolfilestorage/5029/ambasity LOGO.png'], ['Ambasity', 'tagline', 'Grow Your Brand, Find Fun Work'], ['Ambasity', 'teamMembers', 'CEO/Founder'], ['Ambasity', 'teamMembers', 'Alex Harding'], ['Ambasity', 'site', 'Ambasity.com'], ['Ambasity', 'description', 'A portal that connects companies trying to grow their brands with reliable people to staff their events'], ['Ambasity', 'description', 'A portal that connects companies trying to grow their brands with reliable people to staff their events'], ['Ambasity', 'description', 'A portal that connects companies trying to grow their brands at events with reliable people to staff'], ['Ambasity', 'tagline', 'Grow Your Brand, Find Fun Gigs'], ['Ambasity', 'description', 'A portal that connects companies trying to grow their brands with reliable people to staff their events'], ['Ambasity', 'description', 'A portal that connects companies trying to grow their brands with reliable people to staff their events'], ['Kynplex', 'name', 'Kynplex'], ['Kynplex', 'site', 'www.kynplex.com'], ['Kynplex', 'logo', 'https://s3.amazonaws.com/alanacoolfilestorage/5031/labflask.png'], ['Kynplex', 'tagline', 'Empowering Scientific Innovation'], ['Kynplex', 'description', 'The first platform that brings the power of online networking to scientific innovation'], ['Datanautix', 'name', 'Datanautix'], ['Datanautix', 'tagline', 'Converting Customer Data into Customer Happiness'], ['Trignis', 'name', 'Trignis'], ['Trignis', 'site', 'trignis.com'], ['Trignis', 'name', 'Trignis'], ['Trignis', 'site', 'www.trignis.com'], ['Trignis', 'tagline', 'Beyond Fire'],  ['Trignis', 'logo', 'https://s3.amazonaws.com/alanacoolfilestorage/5036/trignis_smallest.png'], ['Trignis', 'teamMembers', 'Founder'], ['Trignis', 'teamMembers', 'Jordan Degraaf'], ['Trignis', 'teamMembers', 'Jordan DeGraaf'], ['Trignis', 'teamMembers', 'Cofounder'], ['Trignis', 'teamMembers', 'Matt Perry'], ['Trignis', 'teamMembers', 'Cofounder'], ['Trignis', 'teamMembers', 'Jimmy Martter'], ['Trignis', 'teamMembers', 'Cofounder'], ['Trignis', 'teamMembers', 'jo'], ['Trignis', 'site', 'www.trignis.com'], ['Trignis', 'description', 'We are commercializing an automated smoker-grill that evenly cooks meat at ideal temperatures with unprecedented precision. We make elite BBQ effortless.'], ['Students of Strength', 'tagline', 'We put Tutors in your pocket'], ['Students of Strength', 'description', 'Students of Strength is a community of scholars from Ivy League and top tier Universities who serve as online academic coaches and mentors'], ['Students of Strength', 'name', 'Students of Strength'], ['Students of Strength', 'site', 'studentsofstrength.com'], ['Students of Strength', 'logo', 'https://s3.amazonaws.com/alanacoolfilestorage/5035/logo.png'],  ['Students of Strength', 'teamMembers', 'Students of Strength King'], ['Students of Strength', 'teamMembers', 'Students of Strength'], ['Students of Strength', 'teamMembers', 'https://s3.amazonaws.com/alanacoolfilestorage/5037/Photo on 2-18-16 at 4.48 PM.jpg'], ['Students of Strength', 'lawyers', 'Max Tribble'], ['Students of Strength', 'equitySplit', 'Legal'], ['Students of Strength', 'debtEquity', 'Yes']
        ];
        
        $not_yet_used = [
            ['MindTime', 'before', 'Overprescription of anti-depressants, inaccessible and expensive mental healthcare and meditation services that are not targeted.'], 
            ['MindTime', 'after', 'Proven, effective alternative to drugs that are cheaper and may help employees be maximally productive and happy.'], 
            ['MindTime', 'customer_photo', 'https://s3.amazonaws.com/alanacoolfilestorage/5020/IMG_3563.JPG'], 
            ['MindTime', 'assumptionCycle', 'People will be happier after CBT treatment'], ['MindTime', 'assumptionCycle', 'Month long prototype'], ['MindTime', 'assumptionCycle', 'Yet to obtain'], 
            ['MindTime', 'assumptionCycle', 'Gamification will increase effective usage'], 
            ['MindTime', 'assumptionCycle', 'Employers will pay for the service and offer incentives for employee engagement'],
            ['Captia', 'before', 'Have one person acquire and put together a number of individual snap stories and/or video footage and create a YouTube/Vimeo video or (short) Instagram Clip'], 
            ['Captia', 'after', 'Have users in groups upload -- and then edit, comment, and vote on -- snippets of video to the same continuous stream'],
            ['Captia', 'challenges', 'Start developing'], 
            ['MindTime', 'productFeatures', 'Gamified CBT Questions and Personal Insights'], 
            ['MindTime', 'productFeatures', 'Increased happiness, fun experience and lifestyle feedback'],
            ['Doorbell', 'shortVideo', '//www.youtube.com/embed/vnh3nooWPoM?wmode=opaque&rel=0'],
            ['Students of Strength', 'shortVideo', '//www.youtube.com/embed/8Y5-4p_yi0I?wmode=opaque&rel=0'],
            ['The Wolfe', 'shortVideo', '//www.youtube.com/embed/q4tqYEN0FsA?wmode=opaque&rel=0'], 
            ['Staketrak', 'shortVideo', '//www.youtube.com/embed/staketrak.us?wmode=opaque&rel=0'],
            ['The Wolfe', 'productVideo', 'https://www.youtube.com/embed/i91PT9BpHUg'],
            ['The Wolfe', 'productImage', 'https://s3.amazonaws.com/alanacoolfilestorage/5011/IMG_1099.JPG'], 
            ['The Wolfe', 'productImage', 'https://s3.amazonaws.com/alanacoolfilestorage/5012/IMG_1099.JPG'], 
            ['The Wolfe', 'productImage', 'https://s3.amazonaws.com/alanacoolfilestorage/5013/IMG_1099.JPG'],
            ['The Wolfe', 'productImage', 'https://s3.amazonaws.com/alanacoolfilestorage/5023/Wolfe-Render3_0031.png'],
            ['Keepspace', 'openPositions', 'Front end web developer'], 
            ['Trignis', 'openPositions', 'Founder'],
            ['Trignis', 'openPositions', 'iOS developer'], 
            ['Trignis', 'openPositions', 'manufacturing guru'],
            ['Staketrak', 'productVideo', '//www.youtube.com/embed/staketrak.us?wmode=opaque&rel=0'],
            ['Students of Strength', 'outsideInvestor', 'Angel'],
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
            
            
            $author = DB::table('teams_users')->where('team_id', $idea->id)->first();

            
            // add a post for this update
            $post = Post::create([
                'user_id' => $author->user_id,
                'idea_id' => $idea->id,
                'title' => " updated its " . $thinking[1] . ".",
                'content' => $thinking[2],
                'type'=> 'update'
            ]);
            
            $tag = str_replace(" ", "", $idea->name);
            $tag = strtolower($tag);
            
            $post->tag($tag);


        }

    }
}