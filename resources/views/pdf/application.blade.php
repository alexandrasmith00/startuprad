@extends('layouts.pdf')

@section('content')

<main role="main">

  <style>
    .pdf-header {
      width: 100%;
      background-image: url("http://startuprad.com/images/background_extra_wide.jpg");
      background-size: cover;
      height: 100%;
    }

    body {
      background-color: white;
    }
  </style>

  <section style="padding-left: 50px; padding-right: 50px;" class="pdf-header">
    <h3 style="font-family: Roboto; color: white; padding-top: 25px;">Startup RAD</h3>
    <h5 style="font-family: Roboto; color: #5F666C;">New Application</h5>
    <h5 style="font-family: Roboto; padding-bottom: 25px; color: #5F666C;">{{ date("F j, Y @ g:i a", strtotime($application->created_at)) }}</h5>
  </section>


  <section style="padding-top: 10px; padding-bottom: 0px;" class="section" >
    <div class="container">

      <div id="details" class="row">
        <div class="col-xs-12">
          <h2 class="section-heading" style="font-family: Roboto;"><b>Founders ({{$application->applicants->count() }})</b><span class="border"></span></h2>
        </div>
        @foreach ($application->applicants as $applicant)
        <div class="col-xs-4">
          <p><i class="fa fa-angle-right blue"></i>&nbsp;
            {{ $applicant->first }} {{ $applicant->last }}
            <br>{{ $applicant->email }}
            <br>Class of {{ $applicant->year }}
            <br> {{ $applicant->concentration }}
            <br> {{ $applicant->secondary }}
            <br> <a href="{{ $applicant->resume }}">View resume</a>
          </p>
        </div>
        @endforeach
      </div>

    </div>
  </section>

  <section style="padding-top: 10px;" class="section" >
    <div class="container">

      <div id="details" class="row">
        <div class="col-xs-12">
          <h2 class="section-heading" style="font-family: Roboto;"><b>Startup</b><span class="border"></span></h2>
        </div>
        <div class="col-xs-4">
          <p><i class="fa fa-angle-right blue"></i>&nbsp; {{ $application->team }}</p>
        </div>
        <div class="col-xs-4">
          <p><i class="fa fa-angle-right blue"></i>&nbsp;
            @if ($application->url != '')
              <a href="{{ $application->url }}">{{ $application->url }}</a>
            @else
              <i>No URL provided</i>
            @endif
          </p>
        </div>
        <div class="col-xs-4">
          <p><i class="fa fa-angle-right blue"></i>&nbsp; <a href="{{ $application->video }}">{{ $application->video }}</a></p>
        </div>
        <hr>
        <div class="col-xs-12">
          <p><i class="fa fa-angle-right blue"></i>&nbsp; {{ $application->description }} </p>
      </div>
    </div>
  </section>
</main>
@stop
