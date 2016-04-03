
<div class="widget-wrap stats-widget">
    <img class="img-responsive img-center" src="{{{ $this_profile->logo->value != "" ? $this_profile->logo->value : 'http://static1.squarespace.com/static/54fe5d59e4b038fd96c9a7c5/550a1fa1e4b0fca40dc6f6b1/550a1fa1e4b03c7ec206969d/1426726818023/Placeholder+Logo.png'  }}}">
    <h3 id="set-name" class="profile-username text-center">{{ $this_profile->name->value }}</h3>
    
    <p id="set-tagline" class="text-muted text-center">{{ $this_profile->tagline->value }} </p>
    <p id="set-site" class="text-muted text-center"><a target="_blank" href="{{ $this_profile->site->value }}">{{ $this_profile->site->value }} </a></p><br>
    
    <div class="row" style="padding-bottom: 25px;">
        <div class="col-xs-2 col-xs-offset-1"><a  target="_blank" href="{{ $this_profile->site->value }}"><i class="zmdi zmdi-globe zmdi-hc-lg"></i></a></div>
        <div class="col-xs-2"><a href="mailto:{{ $this_profile->contact->value }}?Subject=Hello%20from%20Startup%20RAD"><i class="zmdi zmdi-email zmdi-hc-lg"></i></a></div>
        <div class="col-xs-2"><a target="_blank" href="{{ $this_profile->facebook->value }}"><i class="zmdi zmdi-facebook zmdi-hc-lg"></i></a></div>
        <div class="col-xs-2"><a target="_blank" href="{{ $this_profile->linkedin->value }}"><i class="zmdi zmdi-linkedin-box zmdi-hc-lg"></i></a></div>
        <div class="col-xs-2"><a target="_blank" href="{{ $this_profile->twitter->value }}"><i class="zmdi zmdi-twitter zmdi-hc-lg"></i></a></div>
    </div>
    
    @if ($isYours)
      <div class="recent-users-list">
              <!-- Single button -->
                  
          
          <div class="dropdown">
              <button type="button" class="btn dropdown-toggle btn btn-link btn-block btn-loadmore"  data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Edit Overview</button>
              
      
                <div class="collapse" id="collapseExample">
                    <ul>
                        <li><a href="#" id="logo" class="editable" >Edit Logo</a></li>
                        <li><a href="#" id="name" class="editable" >Edit Name</a></li>
                        <li><a href="#" id="tagline" class="editable" >Edit Tagline</a></li>
                        <li><a href="#" id="website" class="editable" >Edit Website</a></li>
                        <li><a href="#" id="social" class="editable" >Edit Social Links</a></li>
                    </ul>
                </div>
              
              
                <ul style="width: 100%;" class="dropdown-menu">
                    <li><a href="#" id="logo" class="editable" >Edit Logo</a></li>
                    <li><a href="#" id="name" class="editable" >Edit Name</a></li>
                    <li><a href="#" id="tagline" class="editable" >Edit Tagline</a></li>
                    <li><a href="#" id="website" class="editable" >Edit Website</a></li>
                    <li><a href="#" id="social" class="editable" >Edit Social Links</a></li>
                </ul>
            </div>

<!--        <button id="about" class="btn btn-link btn-block btn-loadmore editable">Edit Overview</button>-->
      </div>
    

    @endif
    
</div>



@include('includes.profile.team')


@section('scripts')
@parent

    <script id="edit-form" type="text/template">
        <form action="/update" id="form-here" method="POST" class="j-forms" novalidate>
            <input type="hidden" name="idea_id" value="{{ $project->id }}">
        </form>
    </script>

    <script id="tagline-add-to-form" type="text/template">
      <input type="hidden" name="type" value="tagline">

       <div class="unit">
            <label class="label">Tagline</label>
            <div class="input">
                <textarea id="edit-tagline" style="resize: none; overflow: hidden; word-wrap: break-word; height: 62px;" rows="1" class="form-control" type="text" name="tagline" placeholder="{{ $this_profile->tagline->value }}"></textarea> 
            </div>
        </div>
    </script>

    <script id="name-add-to-form" type="text/template">
        <input type="hidden" name="type" value="name">

       <div class="unit">
            <label class="label">Name</label>
            <div class="input">
                <input id="edit-name" class="form-control" type="text" name="name" placeholder="{{ $this_profile->name->value }}"/> 
            </div>
        </div>
    </script>

    <script id="logo-add-to-form" type="text/template">
          <input type="hidden" name="type" value="logo">
          <input name="thefile" type="file">
    </script>

    <script id="website-add-to-form" type="text/template">
        <input type="hidden" name="type" value="website">

        <div style="margin-bottom: 0px;" class="unit">
            <label class="icon-right" for="post">
                <i class="fa fa-globe"></i>
            </label>
            <div class="input">
                <input id="edit-site" class="form-control" type="text" name="site"  placeholder="{{ $this_profile->site->value }}"><br/> 
            </div>
        </div>
    </script>

    <script id="social-add-to-form" type="text/template">
      <input type="hidden" name="type" value="social">

      <label class="label">Social</label>
            <div style="margin-bottom: 0px;" class="unit">
                <label class="icon-right" for="post">
                    <i class="fa fa-globe"></i>
                </label>
                <div class="input">
                    <input id="edit-site" class="form-control" type="text" name="site" placeholder="{{ $this_profile->site->value }}"><br/> 
                </div>
            </div>
            <div style="margin-bottom: 0px;" class="unit">
                <label class="icon-right" for="post">
                    <i class="fa fa-envelope"></i>
                </label>
                <div class="input">
                    <input id="edit-email" class="form-control" type="text" name="contact_email" placeholder="{{ $this_profile->contact->value }}"><br/> 
                </div>
            </div>
            <div style="margin-bottom: 0px;" class="unit">
                <label class="icon-right" for="post">
                    <i class="fa fa-facebook"></i>
                </label>
                <div class="input">
                    <input id="edit-facebook" class="form-control" type="text" name="facebook"  placeholder="{{ $this_profile->facebook->value }}"><br/> 
                </div>
            </div>
            <div style="margin-bottom: 0px;" class="unit">
                <label class="icon-right" for="post">
                    <i class="fa fa-linkedin"></i>
                </label>
                <div class="input">
                    <input id="edit-linkedin" class="form-control" type="text" name="linkedin" placeholder="{{ $this_profile->linkedin->value }}"><br/> 
                </div>
            </div>
            <div style="margin-bottom: 0px;" class="unit">
                <label class="icon-right" for="post">
                    <i class="fa fa-twitter"></i>
                </label>
                <div class="input">
                    <input id="edit-twitter" class="form-control" type="text" name="twitter"  placeholder="{{ $this_profile->twitter->value }}"><br/> 
                </div>
            </div>
    </script>

@stop
