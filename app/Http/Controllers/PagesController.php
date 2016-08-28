<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Filesystem\Filesystem;


class PagesController extends Controller
{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */

    public function index()
    {

        $concentrations = [
          'African and African American Studies',
          'Anthropology',
          'Applied Mathematics',
          'Astrophysics',
          'Biomedical Engineering',
          'Chemical and Physical Biology',
          'Chemistry',
          'Chemistry and Physics',
          'Classics',
          'Comparative Literature',
          'Computer Science',
          'Earth and Planetary Sciences',
          'East Asian Studies',
          'Economics',
          'Electrical Engineering',
          'Engineering Sciences',
          'English',
          'Environmental Science and Public Policy',
          'Folklore and Mythology',
          'Germanic Languages and Literatures',
          'Government',
          'History',
          'History and Literature',
          'History and Science',
          'History of Art and Architecture',
          'Human Developmental and Regenerative Biology',
          'Human Evolutionary Biology',
          'Integrative Biology',
          'Linguistics',
          'Mathematics',
          'Mechanical Engineering',
          'Molecular and Cellular Biology',
          'Music',
          'Near Eastern Languages and Civilizations',
          'Neurobiology',
          'Philosophy',
          'Physics',
          'Psychology',
          'Religion, Comparative Study of',
          'Romance Languages and Literatures',
          'Slavic Languages and Literatures',
          'Social Studies',
          'Sociology',
          'South Asian Studies',
          'Special Concentrations',
          'Statistics',
          'Theater, Dance, and Media',
          'Visual and Environmental Studies',
          'Women, Gender, and Sexuality, Studies of'
        ];

        return view('pages.apply')->withConcentrations($concentrations);
    }


    public function demo()
    {
        return view('demo.index');
    }

    public function apply(Request $request)
    {
      var_dump('team size: ' . $request->input('team_size') );

      $team_size = $request->input('team_size');

      var_dump($request->file('resume'));
      $file = $this->upload_image($request->file('resume'));
      var_dump($file);

      // Get first team member
      $members = [];
      $members[0] = [
        "first" => $request->input('first'),
        "last" => $request->input('last'),
        "email" => $request->input('email'),
        "year" => $request->input('year'),
        "concentration" => $request->input('concentration'),
        "secondary" => $request->input('secondary'),
        "resume" => $request->input('resume'),
      ];


      // Get all other team members
      for ( $i = 1; $i < $team_size; $i++ )
      {
        $counter = $i + 1;

        // Get the next team member
        $members[$i] = [
          "first" => $request->input('first' . $counter),
          "last" => $request->input('last' . $counter),
          "email" => $request->input('email' . $counter),
          "year" => $request->input('year' . $counter),
          "concentration" => $request->input('concentration' . $counter),
          "secondary" => $request->input('secondary' . $counter),
          "resume" => $request->input('resume' . $counter),
        ];

      }




    }

  private function upload_image($image)
  {
    $imageFileName = time() . '.' . $image->getClientOriginalExtension();

    $filePath =  'img/' . Auth::user()->id . '/' . $imageFileName;

    $s3 = \AWS::createClient('s3');
    $s3->putObject(array(
      'Bucket'     => 'startuprad',
      'Key'        => $filePath,
      'SourceFile' => $image,
    ));

    return $filePath;

  }


}
