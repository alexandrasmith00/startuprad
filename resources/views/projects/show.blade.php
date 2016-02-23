@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">HERE IS A PROJECT!!!!!!!</div>

                <div class="panel-body">
                    @include('projects.profile')
                </div>
            </div>
        </div>
    </div>
</div>

@stop
