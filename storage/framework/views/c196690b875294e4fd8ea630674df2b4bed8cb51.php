<?php $__env->startSection('content'); ?>

<form class="form-inline" method="POST" action="<?php echo e(url('/password/reset')); ?>" data-parsley-validate>

  <h3>Create a new password</h3>
  <p class="section-description">Enter your new password.</p>

  <input type="hidden" name="token" value="<?php echo e($token); ?>">

  <div class="form-line form-labels">
    <div class="row">
      <div class="col-xs-12">
        <input data-parsley-required id="login" type="email" class="form-control input-one" name="email" placeholder="Email Address" value="<?php echo e(isset($email) ? $email : old('email')); ?>">
      </div>
    </div>
  </div>

  <div class="form-line form-labels">
    <div class="row">
      <div class="col-xs-12">
        <input data-parsley-required data-parsley-minlength="6" type="password" id="pass" class="form-control input-one" name="password" placeholder="Password">
      </div>
    </div>
  </div>


  <div class="form-line form-labels">
    <div class="row">
      <div class="col-xs-12">
        <input data-parsley-required data-parsley-minlength="6" data-parsley-equalto="#pass" type="password" class="form-control input-one" name="password_confirmation" placeholder="Password Confirmation">
      </div>
    </div>
  </div>

  <?php if(Session::has('errors')): ?>
  <div style="margin-bottom: 25px; text-align: center;" class="link">
    <?php echo e($errors->first()); ?> <a  href="<?php echo e(url('/password/reset')); ?>" class="link">Try resending the link.</a>
  </div>
  <?php endif; ?>



  <button class="btn oversized-btn btn-blue" type="submit">Reset Password</button>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.outside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>