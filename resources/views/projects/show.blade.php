@extends('layouts.app')

@section('content')

<div class="row">

  <div class="col-md-4">
      @include('includes.profile.about')
      @include('includes.deliverables.list')
      @include('includes.profile.organization')

      @include('includes.activity.all')
  </div>
    
  <div class="col-md-8">
    @include('includes.posts.make')
      
      <ul class="nav nav-tabs material-tabs rightbar-tab" role="tablist">
        <li class="active profile-nav"><a href="#feed" aria-controls="message" role="tab" data-toggle="tab">Feed</a></li>
        <li class="profile-nav"><a href="#profile" aria-controls="notifications" role="tab" data-toggle="tab">Profile</a></li>
      </ul>
    
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="feed">
            @include('includes.posts.all')
        </div>
        <div role="tabpanel" class="tab-pane" id="profile">
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
        </div>
      </div>
      
      

  </div>
    
</div>

@stop
