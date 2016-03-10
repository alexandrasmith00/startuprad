              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo e(Auth::user()->profile_picture != "" ? Auth::user()->profile_picture : 'http://www.startuprad.com/assets/images/db414718.default_no_profile.jpg'); ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo e(Auth::user()->name); ?> </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img onclick="changeProfPic()" src="<?php echo e(Auth::user()->profile_picture != "" ? Auth::user()->profile_picture : 'http://www.startuprad.com/assets/images/db414718.default_no_profile.jpg'); ?>" class="img-circle editable-profile-pic" alt="User Image">
                    <p style="color: black;"> 
                      <?php echo e(Auth::user()->name); ?> 
                        
                      <small><a href="/project/<?php echo e(Auth::user()->idea->id); ?>"><?php echo e(Auth::user()->idea->name); ?></a></small>
                        

                      <small>
                          <?php foreach(Auth::user()->cohorts as $cohort): ?>
                                <?php echo e($cohort->name); ?>

                          <?php endforeach; ?>
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

<?php $__env->startSection('scripts'); ?>
<script>
    
    function changeProfPic() {
        alert('change your profile picture!')
    }
</script>
    
<?php $__env->stopSection(); ?>