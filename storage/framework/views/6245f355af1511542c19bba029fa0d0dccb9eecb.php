<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-8 col-md-offset-2 col-sm-12">

    <div class="widget-wrap">
      <div class="widget-header block-header margin-bottom-0 clearfix">
        <div class="row">
          <div class="user-header-left col-xs-12 col-sm-7">

            <div class="user-intro">
              <div class="user-thumb"><a href=""><img src="<?php echo e($user->profile_picture); ?>" alt="user"></a></div>
              <div class="users-info">
                <ul>
                  <li class="name"><a href="<?php echo e(route('profile', ['id' => $user->id ])); ?>"><?php echo e($user->name); ?></a></li>
                  <li class="u-location"><?php echo e($user->companyRole()); ?> at <?php echo e($user->team()->idea->name); ?></li>
                </ul>
              </div>
            </div>
          </div>

          <?php if($user->social): ?>
          <div class="user-header-right col-xs-12 col-sm-5">
            <div class="user-intro">
              <ul class="profile-social-links">
                <li><a href='<?php echo e($user->email); ?>'><i class="fa fa-lg fa-envelope blue"></i></a></li>
                <?php if($user->social->linkedin): ?>
                  <li><a href='<?php echo e($user->social->linkedin); ?>'><i class="fa fa-lg fa-linkedin blue"></i></a></li>
                <?php endif; ?>
                <?php if($user->social->facebook): ?>
                  <li><a href='<?php echo e($user->social->facebook); ?>'><i class="fa fa-lg fa-facebook blue"></i></a></li>
                <?php endif; ?>
                <?php if($user->social->twitter): ?>
                  <li><a href='<?php echo e($user->social->twitter); ?>'><i class="fa fa-lg fa-twitter blue"></i></a></li>
                <?php endif; ?>
              </ul>
            </div>
          </div>
          <?php endif; ?>

        </div>
      </div>


      <?php if($user->student): ?>
        <?php echo $__env->make('users.profile.team', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php endif; ?>

      <?php if($user->student): ?>
        <?php echo $__env->make('users.profile.student', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php endif; ?>


  </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>