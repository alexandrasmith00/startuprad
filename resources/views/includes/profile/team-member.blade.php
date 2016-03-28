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
        <span class="user-details-toggle"><i class="zmdi"></i></span>
    </div>
    <div class="users-details">
        @foreach ($team as $field)
            @if ($field->descriptor != 'Name' && $field->descriptor != 'Role')
                <label>{{ $field->descriptor }}:</label> {{ $field->value }}
            @endif
        @endforeach
    </div>
</div>