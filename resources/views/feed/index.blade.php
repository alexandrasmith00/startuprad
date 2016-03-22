@extends('layouts.app')

@section('content')

@include('includes.posts.make')

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


