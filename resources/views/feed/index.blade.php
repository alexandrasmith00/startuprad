@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2 col-sm-12">
    @include('includes.posts.make', ["placeholder" => "Ask a question or share something interesting...", 'button' => 'Get feedback now', 'isYours' => true])

    @include('includes.posts.all')

  </div>
</div>



@stop

@section('scripts')
@parent
<script src="js/lib/additional-methods.js"></script>
@stop


