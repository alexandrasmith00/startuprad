<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Blog\Post;
use Carbon\Carbon;


class BlogController extends Controller
{
  public function apply()
  {
    $file = $this->upload_image($request->file('logo'));
    $this->update_resource($idea, $request->input('type'), 'logo', 'logo', [['Logo', (env('FILE_BASE') . $file)]]);
    Idea::where('id', $idea)->update(['logo' => (env('FILE_BASE') . $file)]);

  }
}
