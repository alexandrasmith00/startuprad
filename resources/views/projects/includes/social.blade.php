<div class="user-intro">
  <ul class="profile-social-links">
    @if ( $idea->linkedin() ) <li><a href='{{ linkout($idea->linkedin()) }}'><i class="fa fa-lg fa-linkedin blue"></i></a></li>@endif
    @if ( $idea->facebook() ) <li><a href='{{ linkout($idea->facebook()) }}'><i class="fa fa-lg fa-facebook blue"></i></a></li>@endif
    @if ( $idea->twitter() ) <li><a href='{{ linkout($idea->twitter()) }}'><i class="fa fa-lg fa-twitter blue"></i></a></li>@endif
  </ul>
</div>
