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
      
      <div class="tab-content">
          
        <div role="tabpanel" class="tab-pane active" 
             id="feed">
            <?php echo $__env->make('includes.posts.all', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
          
        <div role="tabpanel" class="tab-pane" id="profile">
            
            <?php echo $__env->make('includes.profile.field', [ 'topic' => 'Description', 'label' => 'Describe your startup in one sentence.', 'content' => $this_profile->description != "" ? $this_profile->description->value : '' ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

             <?php echo $__env->make('includes.profile.field', [ 'topic' => 'Customer', 'label' => 'Describe your initial target customer.', 'content' => $this_profile->customer != "" ? $this_profile->customer->value : '' ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
             <?php echo $__env->make('includes.profile.field', [ 'topic' => 'Demands', 'label' => "Describe your customer's needs.", 'content' => $this_profile->demands != "" ? $this_profile->demands->value : '' ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
             <?php echo $__env->make('includes.profile.field', [ 'topic' => 'Product', 'label' => "Describe your product in 1-2 sentences -- what are you building?", 'content' => $this_profile->product != "" ? $this_profile->product->value : ''  ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
             <?php echo $__env->make('includes.profile.field', [ 'topic' => 'Value', 'label' => "Describe how your solution is bringing value to your customer's unmet need.", 'content' => $this_profile->value != "" ? $this_profile->value->value : '' ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
             <?php echo $__env->make('includes.profile.field', [ 'topic' => 'Use Case', 'label' => "Describe how someone would use it.", 'content' => $this_profile->usecase != "" ? $this_profile->usecase->value : '' ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
             <?php echo $__env->make('includes.profile.field', [ 'topic' => 'Market', 'label' => "Define potential market size .", 'content' => $this_profile->market != "" ? $this_profile->market->value : '' ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
             <?php echo $__env->make('includes.profile.field', [ 'topic' => 'Competition', 'label' => "Who are your top three competitors?", 'content' => $this_profile->competition != "" ? $this_profile->competition->value : '' ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
             <?php echo $__env->make('includes.profile.field', [ 'topic' => 'Marketing', 'label' => "What will be your message to users?", 'content' => $this_profile->marketing != "" ? $this_profile->marketing->value : '' ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
             <?php echo $__env->make('includes.profile.field', [ 'topic' => 'Business Model', 'label' => "Describe how you will make money.", 'content' => $this_profile->businessmodel != "" ? $this_profile->businessmodel->value : '' ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>
      </div>
      
      

  </div>
    
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
@parent
    <?php echo $__env->make('js.profile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

 
    <script id="post-update" type="text/template">
    
            <form id="post-box" action="" method="post">

                
                <textarea id="ask-something" spellcheck="false" style="resize: none; overflow: hidden; word-wrap: break-word; height: 62px;" name="message" class="form-control comment" placeholder="Ask something about this update"></textarea>
               
                
            </form>

    </script>

    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>