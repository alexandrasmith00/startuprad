<?php $__env->startSection('content'); ?>

<form  id="form-logins"  class="j-forms" role="form" method="POST" action="<?php echo e(url('/password/email')); ?>" novalidate>

  <div class="login-form-header">
    <div class="logo">
        <a href="/" title="Startup RAD">Startup RAD</a>
    </div>
  </div>

  <div class="login-form-content">
    <!-- start login -->
    <div class="unit">
        <div class="input login-input form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <label class="icon-left" for="login">
                <i class="zmdi zmdi-account"></i>
            </label>
            <input class="form-control login-frm-input"  type="email" id="login" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email">


            <?php if($errors->has('email')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
            <?php endif; ?>

        </div>
    </div>
    <!-- end login -->
  </div>
  <div class="login-form-footer">
    <button type="submit" class="btn-block btn btn-primary">Send Password Reset Link</button>
  </div>



</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.outside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>