@extends('layouts.app')

@section('content')

    @include('includes.posts.make', ["placeholder" => "Ask a question or share something interesting...", 'button' => 'Get feedback now', 'isYours' => true])

    @include('includes.posts.all')

@stop


