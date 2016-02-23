@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">this is your project. go ahead and edit!</div>

                <div class="panel-body">
                             @include('projects.profile')
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('scripts')

    @include('js.profile')


    <script>    
        Pusher.log = function(msg) {
              console.log(msg);
            };

        var pusher = new Pusher('{{env("PUSHER_KEY")}}');

        var editschannel = pusher.subscribe('{{$editsChannel}}');
        editschannel.bind('something-edited', checkingNow);

    </script>

@stop