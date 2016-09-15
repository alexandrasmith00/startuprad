<?php $__env->startSection('content'); ?>


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
  <div style="padding-top: 30px;" class="details">
    <div class="form-line form-labels">
      <div class="row">
        <div class="col-xs-12">
            <h4> Studies </h4>
        </div>
      </div>
    </div>



  </div>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>