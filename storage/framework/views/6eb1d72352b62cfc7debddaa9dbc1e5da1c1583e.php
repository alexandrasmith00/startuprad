<div class="widget-wrap stats-widget">
    <img style="margin: auto;" class="img-responsive img-center" src="<?php echo e($this_profile->logo  != "" ? $this_profile->logo->value : 'http://static1.squarespace.com/static/54fe5d59e4b038fd96c9a7c5/550a1fa1e4b0fca40dc6f6b1/550a1fa1e4b03c7ec206969d/1426726818023/Placeholder+Logo.png'); ?>">
    
    <h3 id="set-name" class="profile-username text-center">
        <?php echo e($this_profile->name  != "" ? $this_profile->name->value : 'No Name'); ?>

    </h3>
    
    <p id="set-tagline" class="text-muted text-center">
        <?php echo e($this_profile->tagline != "" ? $this_profile->tagline->value : 'No Tagline'); ?>

    </p>
    
    <p id="set-site" class="text-muted text-center">
        <a target="_blank" href="">
            <?php echo e($this_profile->site  != "" ? $this_profile->site->value : 'No Site'); ?>

        </a>
    </p><br>
 
    <div class="row" style="padding-bottom: 25px;">
        
        <div class="col-xs-2 col-xs-offset-1">
            <?php if($this_profile->site != ""): ?>
                <a  target="_blank" href="<?php echo e($this_profile->site->value); ?>">
                    <i class="zmdi zmdi-globe zmdi-hc-lg"></i>
                </a>
            <?php else: ?>
                <i class="zmdi zmdi-globe zmdi-hc-lg"></i>
            <?php endif; ?>
        </div>
        
        <div class="col-xs-2 ">
            <?php if($this_profile->contact != ""): ?>
                <a href="mailto:<?php echo e($this_profile->contact->value); ?>?Subject=Hello%20from%20Startup%20RAD">
                    <i class="zmdi zmdi-email zmdi-hc-lg"></i>
                </a>
            <?php else: ?>
                <i class="zmdi zmdi-email zmdi-hc-lg"></i>
            <?php endif; ?>
        </div>
        
        <div class="col-xs-2 ">
            <?php if($this_profile->facebook != ""): ?>
                <a target="_blank" href="<?php echo e($this_profile->facebook->value); ?>">
                    <i class="zmdi zmdi-facebook zmdi-hc-lg"></i>
                </a>
            <?php else: ?>
                <i class="zmdi zmdi-facebook zmdi-hc-lg"></i>
            <?php endif; ?>
        </div>                

        <div class="col-xs-2 ">
            <?php if($this_profile->linkedin != ""): ?>
                <a target="_blank" href="<?php echo e($this_profile->linkedin->value); ?>">
                    <i class="zmdi zmdi-linkedin-box zmdi-hc-lg"></i>
                </a>
            <?php else: ?>
                <i class="zmdi zmdi-linkedin-box zmdi-hc-lg"></i>
            <?php endif; ?>
        </div>    
        
        <div class="col-xs-2 ">
            <?php if($this_profile->twitter != ""): ?>
                <a target="_blank" href="<?php echo e($this_profile->twitter->value); ?>">
                    <i class="zmdi zmdi-twitter zmdi-hc-lg"></i>
                </a>
            <?php else: ?>
                <i class="zmdi zmdi-twitter zmdi-hc-lg"></i>
            <?php endif; ?>
        </div>    
    
    </div>
    
    <?php if($isYours): ?>
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
              
              
            </div>
      </div>
    <?php endif; ?>
    
</div>



<?php echo $__env->make('includes.profile.team', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->startSection('scripts'); ?>
@parent

    <script id="edit-form" type="text/template">
        <form action="/update" id="form-here" method="POST" class="j-forms" enctype="multipart/form-data" novalidate>
            <input type="hidden" name="idea_id" value="<?php echo e($project->id); ?>">
            <input id="ask" type="hidden" name="ask" value="">
            <input id="ask-field" type="hidden" name="ask_field" value="">

        </form>
    </script>

    <script id="tagline-add-to-form" type="text/template">
      <input type="hidden" name="type" value="tagline">

       <div class="unit">
            <label class="label">Tagline</label>
            <div class="input">
                <textarea id="edit-tagline" style="resize: none; overflow: hidden; word-wrap: break-word; height: 62px;" rows="1" class="form-control" type="text" name="tagline" placeholder="<?php echo e($this_profile->tagline != "" ? $this_profile->tagline->value : 'Enter Tagline'); ?>"></textarea> 
            </div>
        </div>
    </script>

    <script id="name-add-to-form" type="text/template">
        <input type="hidden" name="type" value="name">

       <div class="unit">
            <label class="label">Name</label>
            <div class="input">
                <input id="edit-name" class="form-control" type="text" name="name" placeholder="<?php echo e($this_profile->name != "" ? $this_profile->name->value : 'Enter name'); ?>"/> 
            </div>
        </div>
    </script>

    <script id="logo-add-to-form" type="text/template">
        <input type="hidden" name="type" value="logo">
        <div class="input prepend-small-btn">
            <div class="file-button">
                Browse
                <input class="btn btn-success" type="file" name="logo" onchange="document.getElementById('prepend-small-btn').value = this.value;">
            </div>
            <input class="form-control" type="text" id="prepend-small-btn" readonly="" placeholder="no file selected">
        </div>
    </script>

    <script id="website-add-to-form" type="text/template">
        <input type="hidden" name="type" value="website">

        <div style="margin-bottom: 0px;" class="unit">
            <label class="icon-right" for="post">
                <i class="fa fa-globe"></i>
            </label>
            <div class="input">
                <input id="edit-site" class="form-control" type="text" name="site"  placeholder="<?php echo e($this_profile->site != "" ? $this_profile->site->value : 'Enter Website'); ?>"><br/> 
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
                    <input id="edit-site" class="form-control" type="text" name="site" placeholder="<?php echo e($this_profile->site != "" ? $this_profile->site->value : 'Enter Website'); ?>"><br/> 
                </div>
            </div>
            <div style="margin-bottom: 0px;" class="unit">
                <label class="icon-right" for="post">
                    <i class="fa fa-envelope"></i>
                </label>
                <div class="input">
                    <input id="edit-email" class="form-control" type="text" name="contact_email" placeholder="<?php echo e($this_profile->contact != "" ? $this_profile->contact->value : 'Enter Contact Email'); ?>"><br/> 
                </div>
            </div>
            <div style="margin-bottom: 0px;" class="unit">
                <label class="icon-right" for="post">
                    <i class="fa fa-facebook"></i>
                </label>
                <div class="input">
                    <input id="edit-facebook" class="form-control" type="text" name="facebook"  placeholder="<?php echo e($this_profile->facebook != "" ? $this_profile->facebook->value : 'Enter link to Facebook page'); ?>"><br/> 
                </div>
            </div>
            <div style="margin-bottom: 0px;" class="unit">
                <label class="icon-right" for="post">
                    <i class="fa fa-linkedin"></i>
                </label>
                <div class="input">
                    <input id="edit-linkedin" class="form-control" type="text" name="linkedin" placeholder="<?php echo e($this_profile->linkedin != "" ? $this_profile->linkedin->value : 'Enter link to LinkedIn page'); ?>"><br/> 
                </div>
            </div>
            <div style="margin-bottom: 0px;" class="unit">
                <label class="icon-right" for="post">
                    <i class="fa fa-twitter"></i>
                </label>
                <div class="input">
                    <input id="edit-twitter" class="form-control" type="text" name="twitter"  placeholder="<?php echo e($this_profile->twitter != "" ? $this_profile->twitter->value : 'Enter link to Twitter page'); ?>"><br/> 
                </div>
            </div>
    </script>

<?php $__env->stopSection(); ?>
