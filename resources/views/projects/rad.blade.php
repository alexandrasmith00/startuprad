@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2 col-sm-12">
    <div class="widget-wrap">

      @include('projects.includes.header')

      <div style="padding-top: 30px;" class="details">
        <h4>Team Information</h4><br>

        <div class="row">
          <div class="col-xs-12  col-sm-10 col-sm-offset-1">

                @foreach ($idea->instructor() as $instructor)
                    <div class="form-line form-labels">
                      <div class="row">
                        <div class="col-sm-4 col-xs-12">
                          <label><strong>Instructor</strong></label>
                        </div>
                        <div class="col-sm-8 col-xs-12">
                          <p>
                            {{ $instructor->name }}<a href="{{ route('profile', ['id' => $instructor->id ]) }}"> <i class="fa fa-angle-right"></i></a><br>
                            <a href="">{{ $instructor->email }}</a>
                          </p>
                        </div>
                      </div>
                    </div>
                @endforeach

                @foreach ($idea->TFs() as $instructor)
                <div class="form-line form-labels">
                  <div class="row">
                    <div class="col-sm-4 col-xs-12">
                      <label><strong>Teaching Fellow</strong></label>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                      <p>
                        {{ $instructor->name }}<a href="{{ route('profile', ['id' => $instructor->id ]) }}"> <i class="fa fa-angle-right"></i></a><br>
                        <a href="">{{ $instructor->email }}</a>
                      </p>
                    </div>
                  </div>
                </div>
                @endforeach

          </div>
        </div>
      </div>

    </div>

    @include('includes.posts.all')

  </div>
</div>

@stop
