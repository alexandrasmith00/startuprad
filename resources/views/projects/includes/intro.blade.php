<div class="user-header-left col-xs-12 col-sm-8">
  <div class="user-intro">
    <div class="user-thumb"><a href=""><img src="{{{ $idea->logo ? $idea->logo : asset('images/holder.jpg') }}}"></a></div>
    <div class="users-info">
      <ul>
        <li class="name"><a>{{ $idea->name }}</a></li>
        <li class="u-location">{{{ $idea->location() ? $idea->location() : "Company Location"}}}</li>
      </ul>
    </div>
  </div>
</div>
