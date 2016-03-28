@extends('layouts.app')

@section('content')

<div class="row">

  <div class="col-md-4">
      @include('includes.profile.about')
      @include('includes.profile.organization')

  </div>
    

    
  <div class="col-md-8">
    @include('includes.posts.make', ['placeholder' => "Share something with $project->name...", 'button' => 'Start the conversation'])
      
      <ul class="nav nav-tabs material-tabs rightbar-tab" role="tablist">
        <li class="active profile-nav"><a href="#feed" aria-controls="message" role="tab" data-toggle="tab">Feed</a></li>
        <li class="profile-nav"><a href="#profile" aria-controls="notifications" role="tab" data-toggle="tab">Profile</a></li>
      </ul>

      @foreach ($this_profile->team as $team)
        {{ $team }}<br><br>
      @endforeach 
      
      {{ $this_profile->logo }}
      

    <form action="/upload" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>

      
      <div class="tab-content">
          
        <div role="tabpanel" class="tab-pane active" 
             id="feed">
            @include('includes.posts.all')
        </div>
          
        <div role="tabpanel" class="tab-pane" id="profile">
            
            @include('includes.profile.field', [ 'topic' => 'Description', 'label' => 'Describe your startup in one sentence.', 'content' => $project->description ])
            
             @include('includes.profile.field', [ 'topic' => 'Pitch Deck', 'label' => 'Upload your pitch deck.', 'content' => $project->pitchdeck ])
            
             @include('includes.profile.field', [ 'topic' => 'Video', 'label' => 'Upload a pitch video.', 'content' => $project->pitchvideo ])
            
             @include('includes.profile.field', [ 'topic' => 'Customer', 'label' => 'Describe your initial target customer.', 'content' => $project->customer ])
            
             @include('includes.profile.field', [ 'topic' => 'Demands', 'label' => "Describe your customer's needs.", 'content' => $project->need ])
<!--
            <div class="row">
                
                
                <div class="col-md-6">
                    @include('projects.includes.field', array('fieldname'=>'Product Idea', 'fieldbody' => $project->product_idea))
                </div> 
                <div class="col-md-6">
                    @include('projects.includes.field', array('fieldname'=>'Product Idea', 'fieldbody' => $project->product_idea))
                </div>
            </div>
            @include('projects.includes.field', array('fieldname'=>'Description', 'fieldbody' => $project->description))
            @include('projects.includes.field', array('fieldname'=>'Elevator Pitch', 'fieldbody' => $project->elevator_pitch))
            @include('projects.includes.field', array('fieldname'=>'Pitch Video', 'fieldbody' => $project->pitch_video))
            @include('projects.includes.field', array('fieldname'=>'Slide Deck', 'fieldbody' => $project->slide_deck))
-->
            
<!--
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
-->
        </div>
      </div>
      
      

  </div>
    
</div>

@stop
