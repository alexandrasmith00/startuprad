<div id="add-border" class="widget-header clearfix">
    <div>
        <h3>Organization</h3>
        <p>{{ $organization_title }}</p><br/>
    </div>
</div>

<div class="widget-container margin-top-0">
  <div class="widget-content">
    <div class="task-widget">
      <div class="widget-task-list recent-users-list">

          @foreach ($fields as $key => $vals)
            @foreach ($vals as $value)
                <div class="task-entry">
                  <div class="task-intro">
                    <div class="task-title">
                        <span class="emph">{{ $key }}:</span>  {{ $value }}
                    </div>
                  </div>
                </div>
            @endforeach
          @endforeach
          
            @if ($isYours)
                <button class="btn btn-link btn-block btn-loadmore">Edit Organization</button>
            @endif
            
        </div>
      </div>

  </div>
</div>                      
