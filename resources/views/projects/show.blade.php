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
      
      <div class="tab-content">
          
        <div role="tabpanel" class="tab-pane active" 
             id="feed">
            @include('includes.posts.all')
        </div>
          
        <div role="tabpanel" class="tab-pane" id="profile">
            
            @include('includes.profile.field', [ 'topic' => 'Description', 'label' => 'Describe your startup in one sentence.', 'content' => $this_profile->description->value ])
            
             @include('includes.profile.field', [ 'topic' => 'Pitch Deck', 'label' => 'Upload your pitch deck.', 'content' => $project->pitchdeck ])
            
             @include('includes.profile.field', [ 'topic' => 'Video', 'label' => 'Upload a pitch video.', 'content' => $project->pitchvideo ])
            
             @include('includes.profile.field', [ 'topic' => 'Customer', 'label' => 'Describe your initial target customer.', 'content' => $project->customer ])
            
             @include('includes.profile.field', [ 'topic' => 'Demands', 'label' => "Describe your customer's needs.", 'content' => $project->need ])
        </div>
      </div>
      
      

  </div>
    
</div>

@stop


@section('scripts')
@parent
    @include('js.profile')
@stop