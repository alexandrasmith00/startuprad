<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-8 col-md-offset-2 col-sm-12">
<div class="widget-wrap">
  <div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
      <div class="recent-users-list">
        <div class="user-intro">
          <div class="user-thumb"><a><img style="width: auto; border-radius: 0; padding-right: 15px;" src="<?php echo e($user->profile_picture); ?>" alt="user"></a></div>
          <div class="users-info">
            <ul>
              <li class="name"><a><?php echo e($user->name); ?></a></li>
              <li class="u-location"><?php echo e($user->companyRole()); ?> at <?php echo e($user->team()->idea->name); ?></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>

  <form action="<?php echo e(route('update-settings')); ?>" method="POST" data-parsley-validate>
    <?php echo $__env->make('users.settings.account', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <hr style="margin-top: 25px; margin-bottom: 25px;">

    <?php echo $__env->make('users.settings.student', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <hr style="margin-top: 25px; margin-bottom: 25px;">

    <button id="apply-button" class="btn oversized-btn btn-blue" type="submit">Update Settings</button>
  </form>

</div>

  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>