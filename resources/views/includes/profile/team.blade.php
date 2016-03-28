<div class="widget-wrap">
    <div class="widget-header block-header margin-bottom-0 clearfix">
        <div>
            <h3>Team</h3>
        </div>
    </div>
        
    <div class="widget-content">
      <div class="recent-users">
        <div class="recent-users-list">

            @foreach ($project->team->users as $member)
              @include('includes.profile.team-member')
            @endforeach
            
            @if ($isYours)
                <button class="btn btn-link btn-block btn-loadmore">Add Team Member</button>
            @endif
            
        </div>        
      </div>
    </div>
</div>
