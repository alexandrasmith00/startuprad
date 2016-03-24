@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-12">
        @include('includes.posts.make')
        
        @include('includes.posts.all')

    </div>
</div>



@stop

@section('scripts')
<script src="js/lib/additional-methods.js"></script>



@stop


