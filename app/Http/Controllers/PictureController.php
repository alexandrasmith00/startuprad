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
use Image, File;


class PictureController extends Controller
{

  public function profilePicture(Request $request)
  {
//    $image = $request->file('profile-picture');
//    $imageFileName = time() . '.' . $image->getClientOriginalExtension();

    $temp = 'temp-' . Auth::user()->id;

    // open file a image resource
    $img = Image::make($request->file('profile-picture'))->resize(null, 400, function ($constraint) {
      $constraint->aspectRatio();
      $constraint->upsize();
    })->save($temp);

    $filePath =  'img/profile_pictures/' . Auth::user()->id . '/a;;';

    $url = $this->saveImage($filePath, $temp);

    File::delete($temp);

    return $url;
  }

  public function cropPicture(Request $request)
  {

    $temp = 'temp-' . Auth::user()->id;

    // open file a image resource
    $img = Image::make($request->input('image'))->crop(intval($request->input('w')), intval($request->input('h')), intval($request->input('x')), intval($request->input('y')))->save($temp);

    $filePath =  'img/profile_pictures/' . Auth::user()->id . '/cropped';

    $url = $this->saveImage($filePath, $temp);

    File::delete($temp);

    return $url;

  }


  protected function saveImage($path, $temp)
  {
    $s3 = \AWS::createClient('s3');
    $s3->putObject(array(
      'Bucket'     => 'startuprad',
      'Key'        => $path,
      'SourceFile' => $temp
    ));

    return getenv('FILE_BASE') . $path;
  }

}
