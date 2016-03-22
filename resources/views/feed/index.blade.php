@extends('layouts.app')

@section('content')

<div class="page-header filled light">
    <div class="row">
        <div class="col-md-7 col-sm-7">
        </div>
        <div class="col-md-5 col-sm-5">
            @include('includes.posts.tags')
        </div>
    </div>
</div>

<div class="row">

  <div class="col-md-8">
        @include('includes.posts.all')
  </div>

  <div class="col-md-4">
      @include('includes.deliverables.list')
      @include('includes.activity.all')
  </div>
</div>


@stop

@section('scripts')
<script src="js/lib/additional-methods.js"></script>

@stop


