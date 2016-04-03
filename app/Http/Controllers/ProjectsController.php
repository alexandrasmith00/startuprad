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
        
        $posts = Post::where('idea_id', $project->id)->orderBy('published_at', 'desc')->paginate(10);

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
            $this->update_resource($idea, $request->input('type'), 'name', 'Name', 'Name', $request->input('name'));
            Idea::where('id', $idea)->update(['name' => $request->input('name')]);
        }
         
        if ($request->input('type') == 'tagline')
           $this->update_resource($idea, $request->input('type'), 'tagline', 'Tagline', 'Tagline', $request->input('tagline'));
                
        if ($request->input('type') == 'logo')
        {
            dd($request->all());

        }
        
        if ($request->input('type') == 'website')
            $this->update_resource($idea, $request->input('type'), 'site', 'Website', 'Site', $request->input('site'));
        
                
        if ($request->input('type') == 'social')
        {
            $this->update_resource($idea, $request->input('type'), 'site', 'Website', 'Site', $request->input('site'));
            $this->update_resource($idea, $request->input('type'), 'site', 'Website', 'Site', $request->input('site'));
            $this->update_resource($idea, $request->input('type'), 'site', 'Website', 'Site', $request->input('site'));
            $this->update_resource($idea, $request->input('type'), 'site', 'Website', 'Site', $request->input('site'));
            $this->update_resource($idea, $request->input('type'), 'site', 'Website', 'Site', $request->input('site'));
            $this->update_resource($idea, $request->input('type'), 'site', 'Website', 'Site', $request->input('site'));

        }
    
        
        
        return redirect()->back();
    }
    

    
    public function uploadImage(Request $request)
    {
        $image = $request->file('fileToUpload');
        $imageFileName = time() . '.' . $image->getClientOriginalExtension();
        
        $filePath =  'img/' . Auth::user()->id . '/' . $imageFileName;
       
        $s3 = \AWS::createClient('s3');
        $s3->putObject(array(
            'Bucket'     => 'startuprad',
            'Key'        => $filePath,
            'SourceFile' => $request->file('fileToUpload'),
        ));

    }
    

    private function update_resource($idea_id, $resource_type, $name, $name_view, $descriptor, $value)
    {
            Thinking::where('idea_id', $idea_id)
                ->where('current', true)
                ->where('name', $resource_type)
                ->update(['current' => false]);
            
            // for the idea, add a default thinking for each category
            $thinking = Thinking::create([
                'idea_id' => $idea_id,
                'current' => 1,
                'name' => $name,
                'name_view' => $name_view
            ]);
            
            $resource = Resource::create([
                'descriptor' => $descriptor,
                'value' => $value,
                'thinking_id' => $thinking->id
            ]);
    }
    
    
}
