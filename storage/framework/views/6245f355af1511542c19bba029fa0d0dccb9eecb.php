<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-8 col-md-offset-2 col-sm-12">

    <div class="widget-wrap">
      <div class="widget-header block-header margin-bottom-0 clearfix">
        <div class="row">
          <div class="col-xs-6 pull-left">
            <div class="recent-users-list">
              <div class="user-intro">
                <div class="user-thumb"><a href="<?php echo e(route('profile', ['id' => $user->id ])); ?>"><img style="width: auto; border-radius: 0; padding-right: 15px;" src="<?php echo e($user->profile_picture); ?>" alt="user"></a></div>
                <div class="users-info">
                  <ul>
                    <li class="name"><a href="<?php echo e(route('profile', ['id' => $user->id ])); ?>"><?php echo e($user->name); ?></a></li>

                    <li class="u-location"><?php echo e($user->companyRole()); ?> at <?php echo e($user->team()->idea->name); ?></li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
          <?php if($user->social): ?>
          <div style="Text-align: right;" class="col-xs-6 pull-right">

            <div class="user-intro">
              <ul class="profile-social-links">
                <?php if($user->social->linkedin): ?>
                  <li><a href='<?php echo e($user->social->linkedin); ?>'><i class="fa fa-2x fa-linkedin blue"></i></a></li>
                <?php endif; ?>
                <?php if($user->social->facebook): ?>
                  <li><a href='<?php echo e($user->social->facebook); ?>'><i class="fa fa-2x fa-facebook blue"></i></a></li>
                <?php endif; ?>
                <?php if($user->social->twitter): ?>
                  <li><a href='<?php echo e($user->social->twitter); ?>'><i class="fa fa-2x fa-twitter blue"></i></a></li>
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
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>