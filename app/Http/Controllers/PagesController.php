<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */

    public function index()
    {
        return view('pages.index');
    }


    public function demo()
    {
        return view('demo.index');
    }

}
