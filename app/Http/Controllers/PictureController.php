<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Filesystem\Filesystem;
use App\Events\TeamApplied;
use App\Models\Applications\Applicant;
use App\Models\Applications\Application;
use Illuminate\Support\Facades\Auth;
use Log;


class PictureController extends Controller
{

  public function profilePicture(Request $request)
  {
    $image = $request->file('profile-picture');
    $imageFileName = time() . '.' . $image->getClientOriginalExtension();

    $filePath =  'img/' . Auth::user()->id . '/' . $imageFileName;

    $s3 = \AWS::createClient('s3');
    $s3->putObject(array(
      'Bucket'     => 'startuprad',
      'Key'        => $filePath,
      'SourceFile' => $image,
    ));

    return getenv('FILE_BASE') . $filePath;
  }

  public function cropPicture(Request $request)
  {

    return $request->all();

    // open file a image resource
    $img = Image::make('public/foo.jpg');

    // crop image
    $img->crop(100, 100, 25, 25);

  }


}
