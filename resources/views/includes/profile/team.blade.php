<div class="widget-wrap">
    <div class="widget-header block-header margin-bottom-0 clearfix">
        <div>
            <h3>Team</h3>
        </div>
    </div>
        
    <div class="widget-content">
      <div class="recent-users">
        <div class="recent-users-list">
            
            
         @foreach ($this_profile->team as $team)
            @include('includes.profile.team-member')
          @endforeach 

          @if ($isYours)

            <div class="dropdown">
              <button type="button" class="btn dropdown-toggle btn btn-link btn-block btn-loadmore"  data-toggle="collapse" data-target="#collapseteam" aria-expanded="false" aria-controls="collapseteam">Edit Team</button>
              <div class="collapse" id="collapseteam">
                <ul>
                    
                    @foreach ($this_profile->team as $team)
                      @foreach ($team as $field)
                        @if ($field->descriptor == 'Name')
                          <li><a href="#" id="team-{{$field->thinking_id}}" class="editable" >Edit {{ $field->value }}</a></li>
                        @endif
                      @endforeach
                    @endforeach 
                    
                    <li><a href="#" id="team" class="editable" >Add A Team Member</a></li>
                </ul>
              </div>
            </div>

          @endif
        </div>        
      </div>
    </div>
</div>


@section('scripts')
@parent


    <script id="edit-form" type="text/template">
        <form action="/update" id="form-here" method="POST" class="j-forms" enctype="multipart/form-data" novalidate>
            <input type="hidden" name="idea_id" value="{{ $project->id }}">
        </form>
    </script>


    <script id="team-add-to-form" type="text/template">
        <input type="hidden" name="type" value="newteam">
        <input type="hidden" id="resource_id" name="resource_id" value="">

       <div class="unit">
            <label class="label">Name</label>
            <div class="input">
                <input id="edit-name" class="form-control" type="text" name="team-name" placeholder=""/> 
            </div>
        </div>
        
       <div class="unit">
            <label class="label">Role</label>
            <div class="input">
                <input id="edit-name" class="form-control" type="text" name="team-role" placeholder=""/> 
            </div>
        </div>
        
       <div class="unit">
            <label class="label">Email</label>
            <div class="input">
                <input id="edit-name" class="form-control" type="text" name="team-email" placeholder=""/> 
            </div>
        </div>
    </script>

@stop
