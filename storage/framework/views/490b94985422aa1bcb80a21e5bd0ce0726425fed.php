<?php $__env->startSection('content'); ?>

<form class="form-inline" method="POST" action="<?php echo e(url('/password/email')); ?>" data-parsley-validate>

  <h3>Reset your password</h3>
  <p class="section-description">Enter your email to reset your password.</p>

  <div class="form-line form-labels">
    <div class="row">
      <div class="col-xs-12">
        <input data-parsley-required id="login" type="email" class="form-control input-one" name="email" placeholder="Email Address" value="<?php echo e(old('email')); ?>">
      </div>
    </div>
  </div>

  <button class="btn oversized-btn btn-blue" type="submit">Send Password Reset Link</button>
</form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.outside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>