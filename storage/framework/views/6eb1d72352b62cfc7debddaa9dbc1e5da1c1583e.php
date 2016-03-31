
<div class="widget-wrap stats-widget">
    <img class="img-responsive img-center" src="<?php echo e($this_profile->logo->value != "" ? $this_profile->logo->value : 'http://static1.squarespace.com/static/54fe5d59e4b038fd96c9a7c5/550a1fa1e4b0fca40dc6f6b1/550a1fa1e4b03c7ec206969d/1426726818023/Placeholder+Logo.png'); ?>">
    <h3 id="set-name" class="profile-username text-center"><?php echo e($this_profile->name->value); ?></h3>
    
    <p id="set-tagline" class="text-muted text-center"><?php echo e($this_profile->tagline->value); ?> </p>
    <p id="set-site" class="text-muted text-center"><a href="<?php echo e($this_profile->site->value); ?>"><?php echo e($this_profile->site->value); ?> </a></p><br>
    
    <div class="row" style="padding-bottom: 25px;">
        <div class="col-xs-2 col-xs-offset-1"><a  href="<?php echo e($this_profile->site->value); ?>"><i class="zmdi zmdi-globe zmdi-hc-lg"></i></a></div>
        <div class="col-xs-2"><a><i class="zmdi zmdi-email zmdi-hc-lg"></i></a></div>
        <div class="col-xs-2"><a><i class="zmdi zmdi-facebook zmdi-hc-lg"></i></a></div>
        <div class="col-xs-2"><a><i class="zmdi zmdi-linkedin-box zmdi-hc-lg"></i></a></div>
        <div class="col-xs-2"><a><i class="zmdi zmdi-twitter zmdi-hc-lg"></i></a></div>
    </div>
    
    <?php if($isYours): ?>
      <div class="recent-users-list">
              <!-- Single button -->
                  
          
          <div class="dropdown">
              <button type="button" class="btn dropdown-toggle btn btn-link btn-block btn-loadmore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Edit Overview 
                  </button>
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
    

    <?php endif; ?>
    
</div>



<?php echo $__env->make('includes.profile.team', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->startSection('scripts'); ?>
@parent

    <script id="edit-form" type="text/template">

        <form action="#" id="form-here" class="j-forms" novalidate>
     
 
            
      
        </form>
    </script>

    <script id="textarea" type="text/template">
           <div class="unit">
                <label class="label">Tagline</label>
                <div class="input">
                    <textarea id="edit-tagline" style="resize: none; overflow: hidden; word-wrap: break-word; height: 62px;" rows="1" class="form-control" type="text" id="post" placeholder="Tagline"></textarea> 
                </div>
            </div>
    </script>

    <script id="social-add-to-form" type="text/template">

      <label class="label">Social</label>
            <div style="margin-bottom: 0px;" class="unit">
                <label class="icon-right" for="post">
                    <i class="fa fa-globe"></i>
                </label>
                <div class="input">
                    <input id="edit-site" class="form-control" type="text" id="post" placeholder="Website"><br/> 
                </div>
            </div>
            <div style="margin-bottom: 0px;" class="unit">
                <label class="icon-right" for="post">
                    <i class="fa fa-envelope"></i>
                </label>
                <div class="input">
                    <input id="edit-email" class="form-control" type="text" id="post" placeholder="Contact Email"><br/> 
                </div>
            </div>
            <div style="margin-bottom: 0px;" class="unit">
                <label class="icon-right" for="post">
                    <i class="fa fa-facebook"></i>
                </label>
                <div class="input">
                    <input id="edit-facebook" class="form-control" type="text" id="post" placeholder="Facebook Link"><br/> 
                </div>
            </div>
            <div style="margin-bottom: 0px;" class="unit">
                <label class="icon-right" for="post">
                    <i class="fa fa-linkedin"></i>
                </label>
                <div class="input">
                    <input id="edit-linkedin" class="form-control" type="text" id="post" placeholder="LinkedIn Link"><br/> 
                </div>
            </div>
            <div style="margin-bottom: 0px;" class="unit">
                <label class="icon-right" for="post">
                    <i class="fa fa-twitter"></i>
                </label>
                <div class="input">
                    <input id="edit-twitter" class="form-control" type="text" id="post" placeholder="Twitter Link"><br/> 
                </div>
            </div>
    </script>

<?php $__env->stopSection(); ?>
