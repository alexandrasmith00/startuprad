<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

use App\Models\Idea;


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
//        $commentChannel = $this->commentChannel;
        
        
        $editsChannel = 'edits' . $index .'Channel';
        $project = Idea::find($index);

        if( Auth::user()->hasProject($index) ) 
            return view('projects.edit', compact('project', 'editsChannel'));
        else
            return view('projects.show', compact('project', 'commentChannel'));
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
        $project_index = $request->input('id');
        $editsChannel = 'edits' . $index .'Channel';
        $field_name = $request->input('field');
        $new_value = $request->input('new_val');
        
        
  

//        dd($request);
//        $this->pusher->trigger($editsChannel, 'something-updated', $message);

    }
        
    
    
}
