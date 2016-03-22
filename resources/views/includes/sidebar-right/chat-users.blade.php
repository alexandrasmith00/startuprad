<div class="chat-user-container">
    <h3 class="clearfix"><span class="pull-left">Teaching Staff</span><span class="pull-right online-counter">3 Online</span></h3>
    <ul class="chat-user-list">
    </ul>

    @foreach (Auth::user()->cohorts as $cohort)
      <h3 class="clearfix">
      <span class="pull-left">{{$cohort->name}}</span>
      <span class="pull-right online-counter">1 Online</span></h3>

      <ul class="chat-user-list">
        @foreach ($cohort->ideas as $project)
          @foreach ($project->team->users as $member)
            @include('includes.sidebar-right.user')
          @endforeach
        @endforeach
      </ul>
    @endforeach
</div>
