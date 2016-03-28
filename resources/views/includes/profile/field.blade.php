<div class="widget-wrap stats-widget">
    <div class="widget-header">
        <h3>{{ $topic }}</h3>
        <p>{{ $label }}</p>
    </div>
    
    @if ($content != "")
         <div class="widget-content">
          <div class="recent-users">
            <div class="recent-users-list">

              <div class="individual-user" style="border-top: #eee 1px solid;">
                <div class="user-intro">
                    @if ($topic == 'Description')
                      <div style="text-align: center;" class="users-info">
                        <ul><li><label><h3>{{ $content }}</h3></label></li></ul>
                      </div>
                    @else
                       <div class="users-info">
                        <ul><li><label>{{ $content }}</label></li></ul>
                      </div>                   
                    @endif
                </div>
              </div>

            </div>        
          </div>
        </div>


        @if ($isYours)
          <div class="recent-users-list">
            <button id="post-button" class="btn btn-link btn-block btn-loadmore" style="padding: 6px 12px; text-transform: capitalize;">Edit {{ $topic }}</button>

        </div>
        @endif
    
    @else
    
        @if ($isYours)
          <div class="recent-users-list">
            <button id="post-button" class="btn btn-link btn-block btn-loadmore" style="padding: 6px 12px; text-transform: capitalize;">Add Your {{ $topic }}</button>

        </div>
        @else
             <div class="widget-content">
              <div class="recent-users">
                <div class="recent-users-list">

                  <div class="individual-user" style="border-top: #eee 1px solid;">
                    <div class="user-intro">
                       <div style="text-align: center;" class="users-info">
                        <ul><li><label><h4><a>Coming soon!</a></h4></label></li></ul>
                      </div>                   
                    </div>
                  </div>

                </div>        
              </div>
            </div>
    
        @endif
    
    @endif

</div>
   
