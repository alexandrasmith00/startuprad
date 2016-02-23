<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Post;
use Carbon\Carbon;


class CommentsController extends Controller
{
    public function index()
    {

        return 'indexing';
    }

    public function reply()
    {
        return 'replying';
    }
}
