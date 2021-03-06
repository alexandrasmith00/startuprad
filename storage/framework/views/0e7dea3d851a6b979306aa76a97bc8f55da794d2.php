<?php $__env->startSection('content'); ?>

<form class="form-inline" method="POST" action="/login" data-parsley-validate>

    <h3>Sign In</h3>
    <p class="section-description">Log in to the Startup RAD dashboard.</p>

    <div class="form-line form-labels">
      <div class="row">
        <div class="col-xs-12">
          <input data-parsley-required id="login" type="email" class="form-control input-one" name="email" placeholder="Email Address" value="<?php echo e(old('email')); ?>">
        </div>
      </div>
    </div>

    <div class="form-line form-labels">
      <div class="row">
        <div class="col-xs-12">
          <input data-parsley-required data-parsley-minlength="6" type="password" class="form-control input-one" name="password" placeholder="Password">
        </div>
      </div>
    </div>

    <div class="form-line form-labels">
      <div class="row">
        <div class="col-xs-12">
            <input type="checkbox" name="logged" value="true" checked=""> Keep me logged in
        </div>
      </div>
    </div>
    <button class="btn oversized-btn btn-blue" type="submit">Sign in</button>
</form>

<div style="margin-top: 25px; text-align: center;" class="link">
  <a  href="<?php echo e(url('/password/reset')); ?>" class="link">Forgot password?</a>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.outside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>