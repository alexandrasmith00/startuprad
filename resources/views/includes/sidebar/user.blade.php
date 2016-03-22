<div class="user-profile clearfix">
    <div class="admin-user-thumb">
        <img src="{{asset('images/avatar/jaman_01.jpg')}}" alt="admin">
        
    </div>
    <div class="admin-user-info">
        <ul>
            <li><a href="#">{{ Auth::user()->name }}</a></li>
            <li><a href="/project/{{ Auth::user()->idea->id }}">{{ Auth::user()->idea->name }}</a></li>
        </ul>
    </div>
</div>