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
use PDF;


class PagesController extends Controller
{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */

    public function index()
    {

        if ( Auth::check() )
          return redirect()->route('dashboard');

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

      // Create application
      $app = Application::create([
        'team' => $request->input('name'),
        'description' => $request->input('description'),
        'url' => $request->input('url'),
        'video' => $request->input('video'),
      ]);


      $team_size = $request->input('team_size');

      // Get all team team members
      for ( $i = 0; $i < $team_size; $i++ )
      {
        if ($i == 0)
          $counter = '';
        else
          $counter = $i + 1;

        // Create the next team member
        $applicant = Applicant::create([
          'application' => $app->id,
          "first" => $request->input('first' . $counter),
          "last" => $request->input('last' . $counter),
          "email" => $request->input('email' . $counter),
          "year" => $request->input('year' . $counter),
          "concentration" => $request->input('concentration' . $counter),
          "secondary" => $request->input('secondary' . $counter),
          "resume" => $this->resume_file( $request->file('resume' . $counter)),
        ]);
      }

      // Fire application created event
      event (new TeamApplied($app));

      return redirect()->back()->with('flash-message','You have successfully applied to Startup RAD!');

    }

  private function resume_file($image)
  {
    $imageFileName = time() . '.' . $image->getClientOriginalExtension();

    $filePath =  'img/applications/' . $imageFileName;

    $s3 = \AWS::createClient('s3');
    $s3->putObject(array(
      'Bucket'     => 'startuprad',
      'Key'        => $filePath,
      'SourceFile' => $image,
    ));

    return getenv('FILE_BASE') . $filePath;

  }

  public function pdf()
  {


    return view('pdf.application')->withStartup('The Wolfe');
  }


}
