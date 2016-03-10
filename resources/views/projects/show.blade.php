@extends('layouts.app')

@section('content')

    {{ $project }}
         <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class=" img-responsive" src="{{ $project->logo }}" alt="User profile picture">
                  <h3 class="profile-username text-center">{{ $project->name }}</h3>
                  <p class="text-muted text-center">{{ $project->tagline }} </p>
                  <p class="text-muted text-center"><a href="http://{{ $project->site }}">{{ $project->site }} </a></p>

                  <ul class="list-group list-group-unbordered">
                      
                      @foreach ($project->team->users as $member)
                        <li class="list-group-item">
                          <b>{{ $member->name }}</b> <span class="pull-right">Co-founder</span>
                        </li>
                      @endforeach
                     
                  </ul>
                    
                    <div class="row">
                        <div class="col-xs-2 col-xs-offset-1"><a><i class="fa fa-globe"></i></a></div>
                        <div class="col-xs-2"><a><i class="fa fa-envelope-square"></i></a></div>
                        <div class="col-xs-2"><a><i class="fa fa-facebook-square"></i></a></div>
                        <div class="col-xs-2"><a><i class="fa fa-linkedin-square"></i></a></div>
                        <div class="col-xs-2"><a><i class="fa fa-twitter-square"></i></a></div>
                    </div>

                    <br/>
                  <a href="#profile" data-toggle="tab" onClick="makeActive()" class="btn btn-primary btn-block"><b>See more</b></a>
                    
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- About Me Box -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">About {{ $project->name }}</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <strong><i class="fa fa-money margin-r-5"></i>  Funding</strong>
                  <p class="text-muted">
                    B.S. in Computer Science from the University of Tennessee at Knoxville
                  </p>

                  <hr>

                  <strong><i class="fa fa-legal margin-r-5"></i> Legal</strong>
                  <p class="text-muted">Malibu, California</p>

                  <hr>

                  <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
                  <p>
                    <span class="label label-danger">UI Design</span>
                    <span class="label label-success">Coding</span>
                    <span class="label label-info">Javascript</span>
                    <span class="label label-warning">PHP</span>
                    <span class="label label-primary">Node.js</span>
                  </p>

                  <hr>

                  <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
                  <li id="profile-tab"><a href="#profile" data-toggle="tab">Profile</a></li>
                  @if ($isYours)
                    <li><a href="#settings" data-toggle="tab">Settings</a></li>
                  @endif
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                        <span class='username'>
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href='#' class='pull-right btn-box-tool'><i class='fa fa-times'></i></a>
                        </span>
                        <span class='description'>Shared publicly - 7:30 PM today</span>
                      </div><!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>
                      <ul class="list-inline">
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a></li>
                        <li class="pull-right"><a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (5)</a></li>
                      </ul>

                      <input class="form-control input-sm" type="text" placeholder="Type a comment">
                    </div><!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <div class='user-block'>
                        <img class='img-circle img-bordered-sm' src='../../dist/img/user7-128x128.jpg' alt='user image'>
                        <span class='username'>
                          <a href="#">Sarah Ross</a>
                          <a href='#' class='pull-right btn-box-tool'><i class='fa fa-times'></i></a>
                        </span>
                        <span class='description'>Sent you a message - 3 days ago</span>
                      </div><!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <form class='form-horizontal'>
                        <div class='form-group margin-bottom-none'>
                          <div class='col-sm-9'>
                            <input class="form-control input-sm" placeholder="Response">
                          </div>                          
                          <div class='col-sm-3'>
                            <button class='btn btn-danger pull-right btn-block btn-sm'>Send</button>
                          </div>                          
                        </div>                        
                      </form>
                    </div><!-- /.post -->

                    <!-- Post -->
                    <div class="post">
                      <div class='user-block'>
                        <img class='img-circle img-bordered-sm' src='../../dist/img/user6-128x128.jpg' alt='user image'>
                        <span class='username'>
                          <a href="#">Adam Jones</a>
                          <a href='#' class='pull-right btn-box-tool'><i class='fa fa-times'></i></a>
                        </span>
                        <span class='description'>Posted 5 photos - 5 days ago</span>
                      </div><!-- /.user-block -->
                      <div class='row margin-bottom'>
                        <div class='col-sm-6'>
                          <img class='img-responsive' src='../../dist/img/photo1.png' alt='Photo'>
                        </div><!-- /.col -->
                        <div class='col-sm-6'>
                          <div class='row'>
                            <div class='col-sm-6'>
                              <img class='img-responsive' src='../../dist/img/photo2.png' alt='Photo'>
                              <br>
                              <img class='img-responsive' src='../../dist/img/photo3.jpg' alt='Photo'>
                            </div><!-- /.col -->
                            <div class='col-sm-6'>
                              <img class='img-responsive' src='../../dist/img/photo4.jpg' alt='Photo'>
                              <br>
                              <img class='img-responsive' src='../../dist/img/photo1.png' alt='Photo'>
                            </div><!-- /.col -->
                          </div><!-- /.row -->
                        </div><!-- /.col -->
                      </div><!-- /.row -->

                      <ul class="list-inline">
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a></li>
                        <li class="pull-right"><a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (5)</a></li>
                      </ul>

                      <input class="form-control input-sm" type="text" placeholder="Type a comment">
                    </div><!-- /.post -->
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="profile">
                    <!-- The timeline -->

                    @include('projects.templates.field', array('fieldname'=>'Description', 'fieldbody' => $project->description))
                    @include('projects.templates.field', array('fieldname'=>'Product Idea', 'fieldbody' => $project->product_idea))
                    @include('projects.templates.field', array('fieldname'=>'Elevator Pitch', 'fieldbody' => $project->elevator_pitch))
                    @include('projects.templates.field', array('fieldname'=>'Pitch Video', 'fieldbody' => $project->pitch_video))
                    @include('projects.templates.field', array('fieldname'=>'Slide Deck', 'fieldbody' => $project->slide_deck))

                      
                      <div class="row">
                        <div class="col-sm-2">
                            <div class="profile-fieldname">Customer</div>
                        </div>  
                        <div class="col-sm-10">
                            <b>Your Customer  :  </b>
                            
                            <br/><br/>
                            
                            <b>Their Unmet Need  :  </b>
                            
                            <br/><br/>
                            
                            <b>How {{ $project->name }} Is Meeting It  :  </b>
                            
                            <br/><br/>

                            <b>The Result  :  </b>

                        </div>
                    </div>

                  </div><!-- /.tab-pane -->
                  @if ($isYours)
                      <div class="tab-pane" id="settings">
                        <form class="form-horizontal">
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputName" placeholder="Name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" placeholder="Name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputExperience" class="col-sm-2 control-label">Experience</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">Skills</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div><!-- /.tab-pane -->
                    @endif
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->


@stop

@section('scripts')
<script>
    function makeActive() {
        
        $('ul.nav-tabs li.active').removeClass('active');
        $('#profile-tab').addClass('active');
    }

</script>

@stop