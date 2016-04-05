<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Contracts\Filesystem\Filesystem;

use App\Models\Idea;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Thinking;
use App\Models\Resource;

class ProjectsController extends Controller
{
     
    var $pusher;
    var $user;
    var $chatChannel;
    var $notiChannel;
    var $commentChannel;
    var $editsChannel;

    const DEFAULT_CHAT_CHANNEL = 'chat';
    const DEFAULT_NOTI_CHANNEL = 'notification';
    const DEFAULT_COMMENT_CHANNEL = 'comment';
    const DEFAULT_EDITS_CHANNEL = 'edits';

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->pusher = App::make('pusher');
        $this->user = Auth::user();
        $this->chatChannel = self::DEFAULT_CHAT_CHANNEL;
        $this->notiChannel = self::DEFAULT_NOTI_CHANNEL;
        $this->commentChannel = self::DEFAULT_COMMENT_CHANNEL;
        $this->EDITSChannel = self::DEFAULT_EDITS_CHANNEL;

    }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($index)
    {
        $editsChannel = 'edits' . $index .'Channel';
        $project = Idea::where('id', $index)->first();
        
        $posts = Post::where('idea_id', $project->id)->orderBy('created_at', 'desc')->paginate(10);

        $isYours = false;
        if( Auth::user()->hasProject($index) )
            $isYours = true; 
        
        $this_profile = new Profile();
        
        foreach ($project->thinkings as $thinking) {

            if ($thinking->name == 'teamMember' and $thinking->current == 1)
                array_push($this_profile->team, $thinking->resources);   
            if ($thinking->name == 'name' and $thinking->current == 1)
                $this_profile->name = $thinking->resources[0];
            if ($thinking->name == 'tagline' and $thinking->current == 1)
                $this_profile->tagline = $thinking->resources[0];
            if ($thinking->name == 'site' and $thinking->current == 1)
                $this_profile->site = $thinking->resources[0];
            if ($thinking->name == 'logo' and $thinking->current == 1)
                $this_profile->logo = $thinking->resources[0];
            if ($thinking->name == 'facebook' and $thinking->current == 1)
                $this_profile->facebook = $thinking->resources[0];
            if ($thinking->name == 'twitter' and $thinking->current == 1)
                $this_profile->twitter = $thinking->resources[0];            
            if ($thinking->name == 'linkedIn' and $thinking->current == 1)
                $this_profile->linkedin = $thinking->resources[0];
            if ($thinking->name == 'contact' and $thinking->current == 1)
                $this_profile->contact = $thinking->resources[0];
            if ($thinking->name == 'legalStatus' and $thinking->current == 1)
                $this_profile->legalstatus = $thinking->resources[0];
            if ($thinking->name == 'lawyers' and $thinking->current == 1)
                $this_profile->lawyers = $thinking->resources[0];
            if ($thinking->name == 'advisor' and $thinking->current == 1)
                array_push($this_profile->advisors,  $thinking->resources[0]->value);   
            if ($thinking->name == 'partnership' and $thinking->current == 1)
                array_push($this_profile->partners, $thinking->resources[0]->value);   
            if ($thinking->name == 'fundingRound' and $thinking->current == 1)
                $this_profile->fundinground = $thinking->resources[0];
            if ($thinking->name == 'outsideInvestors' and $thinking->current == 1)
                $this_profile->outsideinvestors = $thinking->resources[0];
            if ($thinking->name == 'debtEquity' and $thinking->current == 1)
                $this_profile->debtequity = $thinking->resources[0];
            if ($thinking->name == 'equitySplit' and $thinking->current == 1)
                $this_profile->equitysplit = $thinking->resources[0];
            if ($thinking->name == 'description' and $thinking->current == 1)
                $this_profile->description = $thinking->resources[0];
        }
    
        
        
        
        return view('projects.show', compact('project', 'editsChannel', 'isYours', 'posts', 'this_profile'));

    }
    
    public function add(Request $request)
    {
        $message = 'hey there';
        $index = $request->input('id');
        $editsChannel = 'edits' . $index .'Channel';

        $this->pusher->trigger($editsChannel, 'something-edited', $message);

    }
    
    public function old_update(Request $request)
    {
        $project_id = $request->input('id');
        $editsChannel = 'edits' . $project_id .'Channel';
        $field_name = $request->input('field');
        $new_value = $request->input('new_val');
        
        // update current of current thinking to 0
        $category= DB::table('categories')->where('name', $field_name)->first();

        $old_thinking = Thinking::where('current', '=', 1)
            ->where('category_id', '=', $category->id)
            ->where('idea_id', '=', $project_id)
            ->update(['current' => 0]);
              

        $new_thinking = new Thinking;

        $new_thinking->category_id = $category->id;
        $new_thinking->idea_id = $project_id;
        $new_thinking->body = $new_value;
        $new_thinking->current = 1;

        $new_thinking->save();

        // update idea field
        $updated_idea = Idea::where('id', '=', $project_id)->update([$field_name => $new_value]);

        $updated = [
            'field' => $field_name,
            'new_val' => $new_value
        ];
        
        $this->pusher->trigger($editsChannel, 'something-edited', $updated);
    }
    
    public function update(Request $request)
    {
        $idea = $request->input('idea_id');
        
        if ($request->input('type') == 'name')
        {
            $this->update_resource($idea, $request->input('type'), 'name', 'Name', [['Name', $request->input('name')]]);
            Idea::where('id', $idea)->update(['name' => $request->input('name')]);
        }
         
        if ($request->input('type') == 'tagline')
           $this->update_resource($idea, $request->input('type'), 'tagline', 'Tagline', [['Tagline', $request->input('tagline')]]);
                
        if ($request->input('type') == 'logo')
        {
            $file = $this->upload_image($request->file('logo'));
            $this->update_resource($idea, $request->input('type'), 'logo', 'Logo', [['Logo', (env('FILE_BASE') . $file)]]);
            Idea::where('id', $idea)->update(['logo' => (env('FILE_BASE') . $file)]);
        }
        
        if ($request->input('type') == 'website')
            $this->update_resource($idea, $request->input('type'), 'site', 'Website', [['Site', $request->input('site')]] );
        
                
        if ($request->input('type') == 'social')
        {
            if ($request->input('site') != "")
              $this->update_resource($idea, $request->input('type'), 'site', 'Website', [['Site', $request->input('site')]]);
            if ($request->input('facebook') != "")
              $this->update_resource($idea, $request->input('type'), 'facebook', 'Facebook Profile', [['Facebook', $request->input('facebook')]]);
            if ($request->input('twitter') != "")
              $this->update_resource($idea, $request->input('type'), 'twitter', 'Twitter Profile', [['Twitter', $request->input('twitter')]]);
            if ($request->input('linkedin') != "")
              $this->update_resource($idea, $request->input('type'), 'linkedIn', 'LinkedIn Profile', [['LinkedIn', $request->input('linkedin')]] );
            if ($request->input('contact_email') != "")
              $this->update_resource($idea, $request->input('type'), 'contact', 'Contact Email', [['Email', $request->input('contact_email')]]);
        }
        
        if ($request->input('type') == 'newteam')
        {
            $this->update_resource($idea, 'teamMember', 'teamMember', 'Team Member', [
                ['Name', $request->input('team-name')],
                ['Email', $request->input('team-email')],
                ['Role', $request->input('team-role')]
            ], true);

        }
        
          
        if ($request->input('type') == 'editteam')
        {
            $new_name = $request->input('team-name');
            $new_email = $request->input('team-email');
            $new_role = $request->input('team-role');
            
            if ($new_name == "")
                $new_name = Resource::where('thinking_id', $request->input('resource_id'))->where('Descriptor', 'Name')->value('value');
            
            if ($new_email == "")
                $new_email = Resource::where('thinking_id', $request->input('resource_id'))->where('Descriptor', 'Email')->value('value');

            if ($new_role == "")
                $new_role = Resource::where('thinking_id', $request->input('resource_id'))->where('Descriptor', 'Role')->value('value');   
            
            $this->update_resource($idea, 'teamMember', 'teamMember', 'Team Member', [
                ['Name', $new_name],
                ['Email', $new_email],
                ['Role', $new_role]
            ], true, $request->input('resource_id'));
        }     
        
        
        if ($request->input('type') == 'legal')
        {
            
            if ($request->input('legal-status'))
                $this->update_resource($idea, 'legalStatus', 'legalStatus', 'Legal Status', [['Legal Status', ($request->input('legal-status-state') . " " . $request->input('legal-status-type'))]]);
            else
                $this->update_resource($idea, 'legalStatus', 'legalStatus', 'Legal Status', [['Legal Status', 'None']]);
            
            if ($request->input('lawyers') != "")
                $this->update_resource($idea, 'lawyers', 'lawyers', 'Lawyers', [['Lawyers', $request->input('lawyers') ]]);
        }
        
        if ($request->input('type') == 'funding')
        {
            
            if ($request->input('funding-round') != "")
                $this->update_resource($idea, 'fundingRound', 'fundingRound', 'Funding Round', [['Funding Round', $request->input('funding-round')]]);
            if ($request->input('equity-split') != "")
                $this->update_resource($idea, 'equitySplit', 'equitySplit', 'Equity Split', [['Equity Split', $request->input('equity-split')]]);
            if ($request->input('outside-investors') != "")
                $this->update_resource($idea, 'outsideInvestors', 'outsideInvestors', 'Outside Investors', [['Outside Investors', $request->input('outside-investors')]]);
            if ($request->input('debt-equity') != "")
                $this->update_resource($idea, 'debtEquity', 'debtEquity', 'Debt Equity', [['Debt Equity', $request->input('debt-equity')]]);

        }
        
        if ($request->input('type') == 'partner')
            $this->update_resource($idea, 'partnership', 'partnership', 'Partnership', [['Partnership', $request->input('partner')]]);
        
        if ($request->input('type') == 'advisor')
            $this->update_resource($idea, 'advisor', 'advisor', 'Advisor', [['Advisor', $request->input('advisor')]]);
        
        if ($request->input('type') == 'Description')
            $this->update_resource($idea, 'description', 'description', 'Description', [['Description', $request->input('Description')]]);

        
        return redirect()->back();
    }
    

    
    public function upload_image($image)
    {
        $imageFileName = time() . '.' . $image->getClientOriginalExtension();
        
        $filePath =  'img/' . Auth::user()->id . '/' . $imageFileName;
       
        $s3 = \AWS::createClient('s3');
        $s3->putObject(array(
            'Bucket'     => 'startuprad',
            'Key'        => $filePath,
            'SourceFile' => $image,
        ));
        
        return $filePath;

    }
    

    private function update_resource($idea_id, $resource_type, $name, $name_view, $resources, $specific=false, $resource_id=0)
    {
        if ($specific) {
            if ($resource_id != 0) {
                Thinking::where('id', $resource_id)
                  ->update(['current' => false]);               
            }

        } else {
            Thinking::where('idea_id', $idea_id)
                ->where('current', true)
                ->where('name', $resource_type)
                ->update(['current' => false]);
        }

            // for the idea, add a default thinking for each category
            $thinking = Thinking::create([
                'idea_id' => $idea_id,
                'current' => 1,
                'name' => $name,
                'name_view' => $name_view
            ]);
        
            foreach ($resources as $new_resource)
            {
                $resource = Resource::create([
                    'descriptor' => $new_resource[0],
                    'value' => $new_resource[1],
                    'thinking_id' => $thinking->id
                ]);
            }
            
            
    }
    
    
}
