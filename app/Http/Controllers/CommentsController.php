<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Slynova\Commentable\Models\Comment;

use App\Models\Post;
use Carbon\Carbon;


class CommentsController extends Controller
{
    public function index()
    {

        return 'indexing';
    }

    public function reply(Request $request)
    {
        $content = $request->input('message');
        $info = explode("-", $request->input('comment-id'));
        $type = $info[0];
        $parent_id = $info[1];

        if ($type == 'post')
        {
            $parent_post = Post::find($parent_id);
            $new_comment = $parent_post->comments()->create(['body' => $content, 'user_id' => int(Auth::user()->id)]);
        }   
        else if ($type == 'comment')
        {
            $parent_comment = Comment::find($parent_id);
            $new_comment = Comment::create(['body' => $content, 'user_id' => int(Auth::user()->id)]);
            $new_comment->makeChildOf($parent_comment);
        }
        
        return [$request->input(), Auth::user(), $new_comment];
    }
}
