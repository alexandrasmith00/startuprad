              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{{ Auth::user()->profile_picture != "" ? Auth::user()->profile_picture : 'http://www.startuprad.com/assets/images/db414718.default_no_profile.jpg' }}}" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ Auth::user()->name }} </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img onclick="changeProfPic()" src="{{{ Auth::user()->profile_picture != "" ? Auth::user()->profile_picture : 'http://www.startuprad.com/assets/images/db414718.default_no_profile.jpg' }}}" class="img-circle editable-profile-pic" alt="User Image">
                    <p style="color: black;"> 
                      {{ Auth::user()->name }} 
                        
                      <small><a href="/project/{{ Auth::user()->idea->id }}">{{ Auth::user()->idea->name }}</a></small>
                        

                      <small>
                          @foreach (Auth::user()->cohorts as $cohort)
                                {{ $cohort->name }}
                          @endforeach
                          RAD
                      </small>
                            
                    </p>
                  </li>
                  <!-- Menu Body -->
<!--
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
-->
                  <!-- Menu Footer-->
                  <li class="user-footer">
<!--
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
-->
                    <div class="pull-right">
                      <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>

@section('scripts')
<script>
    
    function changeProfPic() {
        alert('change your profile picture!')
    }
</script>
    
@stop