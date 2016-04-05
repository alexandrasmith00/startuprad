<div class="widget-wrap stats-widget">
    <div class="widget-header">
        <h3>{{ $topic }}</h3>
        <p>{{ $label }}</p>
    </div>
    
    @if ($content != "")
         <div class="widget-content">
          <div class="recent-users">
            <div style="margin-bottom: 0px;" class="recent-users-list">

              <div class="individual-user" style="border-top: #eee 1px solid;">
                <div style="margin: 5px" class="user-intro">
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
            <button id="{{  $topic }}" class="btn btn-link btn-block btn-loadmore editable" style="padding: 6px 12px; text-transform: capitalize;">Edit {{ $topic }}</button>

        </div>
        @endif
    
    @else
    
        @if ($isYours)
          <div class="recent-users-list">
            <button id="{{  $topic }}" class="btn btn-link btn-block btn-loadmore editable" style="padding: 6px 12px; text-transform: capitalize;">Add Your {{ $topic }}</button>

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

@section('scripts')
@parent

    <script id="{{ $topic }}-add-to-form" type="text/template">
      <input type="hidden" name="type" value="{{ $topic }}">

       <div class="unit">
            <label class="label">{{ $topic }}</label>
            <div class="input">
                <textarea id="edit-tagline" style="resize: none; overflow: hidden; word-wrap: break-word; height: 62px;" rows="1" class="form-control" type="text" name="{{ $topic }}" placeholder="{{{ $content != "" ? $content : ''  }}}"></textarea> 
            </div>
        </div>
    </script>

@stop
   
