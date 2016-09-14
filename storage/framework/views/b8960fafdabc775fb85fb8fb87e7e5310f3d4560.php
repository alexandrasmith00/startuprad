<?php $__env->startSection('content'); ?>

<form role="form" class="form-inline" method="POST" action="" data-parsley-validate>

  <h3>Complete your account</h3>
  <p class="section-description">Create your password for Startup RAD.</p>

  <div class="form-line form-labels">
    <div class="row">
      <div class="col-xs-12">
        <input disabled data-parsley-required id="email" style="margin-top: 25px;" type="email" name="email" value="<?php echo e($email); ?>" class="form-control input-one" placeholder="Email Address">
      </div>
    </div>
  </div>

  <div class="form-line form-labels">
    <div class="row">
      <div class="col-xs-12">
        <input id="password" data-parsley-type="alphanum" data-parsley-required data-parsley-minlength="6"  type="password" class="form-control input-one <?php echo e($errors->has('password') ? 'parsley-error' : ''); ?>" name="password" placeholder="Password">
      </div>
    </div>
  </div>

  <div class="form-line form-labels">
    <div class="row">
      <div class="col-xs-12">
        <input data-parsley-required data-parsley-minlength="6" data-parsley-equalto="#password"  type="password" class="form-control input-one <?php echo e($errors->has('password') ? 'parsley-error' : ''); ?>" name="password_confirmation" placeholder="Confirm password">
      </div>
    </div>
  </div>

  <button class="btn oversized-btn btn-blue" type="submit">Continue</button>

</form>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.outside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>