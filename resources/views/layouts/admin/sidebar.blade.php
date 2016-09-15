<style>
  @media screen and (min-width: 780px) {
    .slideout-panel {
      margin-left: 256px;
    }

    .slideout-menu {
      display: block;
    }

    .btn-hamburger {
      display: none;
    }
  }

  ul.submenu > li {
    padding-left: 15px;
  }

</style>

<a href="">
  <header style="padding-top: 0px;" class="menu-header">
    <img style="vertical-align: top; margin-top: 16px;"  height="32px" src="{{ Auth::user()->profile_picture }}">
    <div style=" display: inline-block;" class="user-details">
      <div style="margin-top: 10px;" class="menu-header-title">{{ Auth::user()->name }}</div>
      <div style="line-height: 12px; font-size: 12px;" class="subheader">{{ Auth::user()->companyRole() }} at {{Auth::user()->team()->idea->name }}</div>
    </div>

  </header>
</a>

<section class="menu-section">
  <h3 class="menu-section-title">Dashboard</h3>
  <ul class="menu-section-list">
    <li><a href="{{ route('dashboard') }}">Home</a></li>
    <li><a href="{{ route('profile') }}">Profile</a></li>
    <li><a href="{{ route('project.show', ['id' => Auth::user()->team()->idea->id ]) }}">{{ Auth::user()->team()->idea->name }}</a></li>

  </ul>
</section>

@if ( Auth::user()->isStudent() )
@foreach (Auth::user()->cohorts as $cohort)
<section class="menu-section">
  <h3 class="menu-section-title">{{ $cohort->name }}</h3>
  <ul class="menu-section-list">
    <li><a href="">View All<span class="pull-right"><i class="fa fa-angle-right"></i></span></a></li>

    @foreach ($cohort->ideas as $team)
      @if (Auth::user()->team()->idea->id != $team->id)
        <li><a href="">{{ $team->name }}</a></li>
      @endif
    @endforeach
  </ul>
</section>

@endforeach
@endif


@if ( Auth::user()->isStaff() )
<section class="menu-section">
  <h3 class="menu-section-title">Admin</h3>
  <ul class="menu-section-list">
    <li><a href="">Analytics</a></li>
    @if (Auth::user()->hasRole('Admin'))
      <li><a href="">Advisors</a></li>
      <li><a href="{{ route('student-invite') }}">Student Invite Test</a></li>
    @endif
  </ul>
</section>
@endif

<section class="menu-section">
  <!--  <h3 class="menu-section-title">People</h3>-->
  <ul class="menu-section-list">
    <li><a href="{{ route('settings') }}">Settings</a></li>
    <li><a data-toggle="modal" href="#feedback-modal">Feedback</a></li>
    <li><a href="/logout">Logout<span class="pull-right"><i class="fa fa-angle-right"></i></span></a></li>
  </ul>
</section>


@section('scripts')
@parent

<script>

  $(document).ready(function() {

    // Slideout Variable
    var slideout = new Slideout({
      'panel': document.getElementById('main'),
      'menu': document.getElementById('menu'),
      'fx' : "linear",
      'padding': 256,
      'tolerance': 70,
    });

    // Toggle button
    $('#slideout').click(function() {
      slideout.toggle();
    });

  });

</script>

@stop
