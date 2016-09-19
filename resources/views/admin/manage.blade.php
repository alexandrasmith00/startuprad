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
              @include('admin.includes.instructor')
              @include('admin.includes.tfs')
          </div>
        </div>
        <hr>

        <form action="" method="POST" data-parsley-validate>
          @include('admin.includes.invite-tf')
          <button id="apply-button" class="btn oversized-btn btn-blue" type="submit">Add Teaching Fellow</button>
        </form>

      </div>

    </div>



  </div>
</div>

@stop
