<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-8 col-md-offset-2 col-sm-12">
    <div class="widget-wrap">


      <form action="" method="POST" data-parsley-validate>
        <?php echo $__env->make('admin.includes.invite-team', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <button id="apply-button" class="btn oversized-btn btn-blue" type="submit">Add Team</button>
      </form>
      <hr>



      <?php foreach($cohorts as $cohort): ?>
      <div style="padding-top: 30px;" class="details">
        <h4><?php echo e($cohort->name); ?></h4><br>

        <div class="row">
          <div class="col-xs-12  col-sm-10 col-sm-offset-1">
            <div class="form-line form-labels">
              <div class="row">
                <div class="col-xs-4">
                  <b><p>Students</p></b>
                  <?php foreach($cohort->users as $user): ?>
                    <?php if($user->hasRole('Student') && ! ($user->isStaff() )): ?>
                      <p><a href="<?php echo e(route('profile', ['id' => $user->id ])); ?>"><?php echo e($user->name); ?></a></p>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
                <div class="col-xs-4">
                  <b><p>Staff</p></b>
                  <?php foreach($cohort->users as $user): ?>
                      <?php if($user->isStaff()): ?> <p><?php echo e($user->name); ?></p> <?php endif; ?>
                  <?php endforeach; ?>
                </div>
                <div class="col-xs-4">
                  <b><p>Advisors</p></b>
                  <?php foreach($cohort->users as $user): ?>
                    <?php if($user->hasRole('advisors')): ?> <p><?php echo e($user->name); ?></p> <?php endif; ?>
                  <?php endforeach; ?>
                </div>
              </div>

            </div>
          </div>
        </div>
        <hr>

      </div>
      <?php endforeach; ?>
    </div>



  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>