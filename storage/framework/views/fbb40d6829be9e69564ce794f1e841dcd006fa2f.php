<?php $__env->startSection('content'); ?>

<div class="row">

  <div class="col-md-4">
      <?php echo $__env->make('includes.profile.about', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('includes.profile.organization', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  </div>
    

    
  <div class="col-md-8">
    <?php echo $__env->make('includes.posts.make', ['placeholder' => "Share something with $project->name...", 'button' => 'Start the conversation'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      
      <ul class="nav nav-tabs material-tabs rightbar-tab" role="tablist">
        <li class="active profile-nav"><a href="#feed" aria-controls="message" role="tab" data-toggle="tab">Feed</a></li>
        <li class="profile-nav"><a href="#profile" aria-controls="notifications" role="tab" data-toggle="tab">Profile</a></li>
      </ul>

      <?php foreach($this_profile->team as $team): ?>
        <?php echo e($team); ?><br><br>
      <?php endforeach; ?> 
      
      <?php echo e($this_profile->logo); ?>

      

    <form action="/upload" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>

      
      <div class="tab-content">
          
        <div role="tabpanel" class="tab-pane active" 
             id="feed">
            <?php echo $__env->make('includes.posts.all', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
          
        <div role="tabpanel" class="tab-pane" id="profile">
            
            <?php echo $__env->make('includes.profile.field', [ 'topic' => 'Description', 'label' => 'Describe your startup in one sentence.', 'content' => $project->description ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
             <?php echo $__env->make('includes.profile.field', [ 'topic' => 'Pitch Deck', 'label' => 'Upload your pitch deck.', 'content' => $project->pitchdeck ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
             <?php echo $__env->make('includes.profile.field', [ 'topic' => 'Video', 'label' => 'Upload a pitch video.', 'content' => $project->pitchvideo ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
             <?php echo $__env->make('includes.profile.field', [ 'topic' => 'Customer', 'label' => 'Describe your initial target customer.', 'content' => $project->customer ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
             <?php echo $__env->make('includes.profile.field', [ 'topic' => 'Demands', 'label' => "Describe your customer's needs.", 'content' => $project->need ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!--
            <div class="row">
                
                
                <div class="col-md-6">
                    <?php echo $__env->make('projects.includes.field', array('fieldname'=>'Product Idea', 'fieldbody' => $project->product_idea), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div> 
                <div class="col-md-6">
                    <?php echo $__env->make('projects.includes.field', array('fieldname'=>'Product Idea', 'fieldbody' => $project->product_idea), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
            <?php echo $__env->make('projects.includes.field', array('fieldname'=>'Description', 'fieldbody' => $project->description), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('projects.includes.field', array('fieldname'=>'Elevator Pitch', 'fieldbody' => $project->elevator_pitch), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('projects.includes.field', array('fieldname'=>'Pitch Video', 'fieldbody' => $project->pitch_video), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('projects.includes.field', array('fieldname'=>'Slide Deck', 'fieldbody' => $project->slide_deck), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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

                <b>How <?php echo e($project->name); ?> Is Meeting It  :  </b>

                <br/><br/>

                <b>The Result  :  </b>

            </div>
        </div>
-->
        </div>
      </div>
      
      

  </div>
    
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>