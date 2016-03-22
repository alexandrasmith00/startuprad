@extends('layouts.app')

@section('content')


<div class="row">
  <div class="col-md-3">
    @include('includes.profile.about')
    @include('includes.profile.organization')
  </div>
    
  <div class="col-md-9">
    <div class="nav-tabs-custom">
      @include('includes.profile.navigation')
      
        <div class="tab-content">

            @include('includes.profile.activity')
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
