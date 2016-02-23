@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Here are users</div>

                <div class="panel-body">
                    All projects in current user's cohorts
                    <br>
<!--
                    <table class="table table-striped">
                        <tbody>
-->
                            
                            @foreach (Auth::user()->cohorts as $cohort)
                                {{ $cohort->name }}
                    
                                @foreach ($cohort->ideas as $project)
                                    <a href="/project/{{ $project->id }}"> {{ $project->name }}</a><br>
                                @endforeach
                            @endforeach
                            
<!--
                        </tbody>
                    </table>
                    
-->
                
                </div>
            </div>
        </div>
    </div>
</div>

@stop
