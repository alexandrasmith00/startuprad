<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Post;
use Carbon\Carbon;


class FeedController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('published_at', 'desc')
            ->paginate(config('blog.posts_per_page'));

        return view('feed.index', compact('posts'));
    }

    public function showPost($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();

        return view('blog.post')->withPost($post);
    }
}
