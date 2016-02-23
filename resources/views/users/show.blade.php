@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Here is a single user account</div>

                <div class="panel-body">
                    
                    <h4>Info:</h4>
                    <p>{{$user->first}} {{$user->last}} ({{$user->email}})</p>

    <br/><br/>
                    <h4>Working On:</h4>
                    <ul>
                    @foreach ($user->teams as $team)
                        <li>

                        @foreach ($team->idea as $idea)
                            <b><a href="/project/{{ $idea->id }}">{{ $idea->name }}: {{ $idea->tagline }} </a></b><br/>
                            <a href="{{$idea->website}}">{{ $idea->website }}</a><br/>
                            <img src="{{ $idea->logo }}"><br/>
                        @endforeach
                        
                        <br/>Team Members:<br/><br/>
                        @foreach ($team->users as $member)
                            <a href="/account/show/{{ $member->id }}">{{ $member->name }}</a><br/>
                        @endforeach
                        </li><br/><br/><br/>
                   
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
