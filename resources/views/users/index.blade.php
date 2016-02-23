@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Here are users</div>

                <div class="panel-body">
                    All users
                    
                    <table class="table table-striped">
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->first }} {{ $user->last }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @include('format.roles')
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    
                
                </div>
            </div>
        </div>
    </div>
</div>

@stop
