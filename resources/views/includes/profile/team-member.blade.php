<!-- <div class="individual-user info-expand">-->
<div class="individual-user">
    <div class="user-intro">
<!--        <div class="user-thumb"><a href="#"><img src="images/avatar/bobbyjkane.jpg" alt="user"></a></div>-->
        <div class="users-info">
            <ul>

                @foreach ($team as $field)
                    @if ($field->descriptor == 'Name')
                        <li class="u-name"><a href="#">{{ $field->value }}</a></li>
                    @elseif ($field->descriptor == 'Role')
                        <li class="u-location">{{ $field->value }}</li>
                    @endif
                @endforeach
            </ul>
        </div>
        <span style="float: right; padding-right: 5px;"><i class="blue fa fa-angle-down"></i></span>
    </div>
    <div class="users-details">
        @foreach ($team as $field)
            @if ($field->descriptor != 'Name' && $field->descriptor != 'Role')
                <label >{{ $field->descriptor }}:</label> {{ $field->value }}
            @endif
        @endforeach
    </div>
</div>


@section('scripts')
@parent



    <script id="team-{{ $team[0]->thinking_id }}-add-to-form" type="text/template">
        <input type="hidden" name="type" value="editteam">
        <input type="hidden" id="resource_id" name="resource_id" value="{{ $team[0]->thinking_id }}">


        <div class="unit">
            <label class="label">Name</label>
            <div class="input">
                <input class="form-control" type="text" name="team-name" placeholder="@foreach($team as $field)@if($field->descriptor == 'Name'){{ $field->value }} @endif @endforeach"/>
            </div>
        </div>


        <div class="unit">
            <label class="label">Role</label>
            <div class="input">
                <input class="form-control" type="text" name="team-role" placeholder="@foreach($team as $field)@if($field->descriptor == 'Role'){{ $field->value }} @endif @endforeach"/>
            </div>
        </div>

        <div class="unit">
            <label class="label">Email</label>
            <div class="input">
                <input class="form-control" type="text" name="team-email" placeholder="@foreach($team as $field)@if($field->descriptor == 'Email'){{ $field->value }} @endif @endforeach"/>
            </div>
        </div>

    </script>

@stop
