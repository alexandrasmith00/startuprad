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
      <div style="line-height: 12px; font-size: 12px;" class="subheader">
        @if ( Auth::user()->companyRole() )
          {{ Auth::user()->companyRole() }} at
        @endif
        {{Auth::user()->idea->name }}
      </div>
    </div>

  </header>
</a>

<section class="menu-section">
  <h3 class="menu-section-title">Dashboard</h3>
  <ul class="menu-section-list">
    <li><a href="{{ route('dashboard') }}">Home</a></li>
    <li><a href="{{ route('my-profile') }}">Profile</a></li>
    <li><a href="{{ route('project.show', ['id' => Auth::user()->idea->id ]) }}">{{ Auth::user()->idea->name }}</a></li>

  </ul>
</section>

@if ( Auth::user()->isStaff() )
<section class="menu-section">
  <h3 class="menu-section-title">Admin</h3>
  <ul class="menu-section-list">

    @if (Auth::user()->hasRole('Professor'))
      <li><a href="{{ route('manage-rad') }}">Manage RAD Team</a></li>
    @elseif (Auth::user()->hasRole('Admin'))
      <li><a href="{{ route('student-invite') }}">Invite Rad</a></li>
    @else
      <li><a href=""><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;  Under Construction</a></li>
    @endif
  </ul>
</section>
@endif



@foreach (Auth::user()->cohorts as $cohort)
<section class="menu-section">
  <h3 class="menu-section-title">{{ $cohort->name }}</h3>
  <ul class="menu-section-list">
    <li><a href="#cohort-{{$cohort->id}}" data-toggle="collapse">View All
      <span id="#cohort-{{$cohort->id}}-arrow" class="pull-right"><i class="fa fa-angle-right"></i></span></a>
    </li>

    <div id="cohort-{{$cohort->id}}" class="collapse cohort-collapse">

      @foreach ($cohort->ideas as $idea)
      <li><a style="padding-left: 25px;" href="{{ route('project.show', ['id' => $idea->id ]) }}">{{ $idea->name }}</a></li>
      @endforeach
    </div>


  </ul>
</section>
@endforeach



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

    $('.cohort-collapse').on('hide.bs.collapse', function (e) {
    })

    $('.cohort-collapse').on('show.bs.collapse', function (e) {
      var icon = '#' + e.currentTarget.id + '-arrow';
      $("#cohort-1-arrow").html('');

      console.log(icon);
//      $('#' + e.currentTarget.id + '-arrow').addClass('fa-angle-down');
    })

  });

</script>

@stop
