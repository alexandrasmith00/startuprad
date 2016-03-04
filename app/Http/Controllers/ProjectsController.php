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

use App\Models\Idea;
use App\Models\Thinking;


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
        
        if( Auth::user()->hasProject($index) ) {
            $isYours = true;
            return view('projects.edit', compact('project', 'editsChannel', 'isYours'));
        }
        else {
            $isYours = false;
            return view('projects.show', compact('project', 'commentChannel', 'isYours'));
        }
    }
    
    public function add(Request $request)
    {
        $message = 'hey there';
        $index = $request->input('id');
        $editsChannel = 'edits' . $index .'Channel';

        $this->pusher->trigger($editsChannel, 'something-edited', $message);

    }
    
    public function update(Request $request)
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
        
    
    
}
