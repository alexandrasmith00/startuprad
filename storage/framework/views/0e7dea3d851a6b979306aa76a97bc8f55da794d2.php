<?php $__env->startSection('content'); ?>

<form  id="form-logins"  class="j-forms" role="form" method="POST" action="<?php echo e(url('/login')); ?>" novalidate>

  <div class="login-form-header">
    <div class="logo">
        <a href="/" title="Startup RAD">Startup RAD</a>
    </div>
  </div>

  <div class="login-form-content">
    <!-- start login -->
    <div class="unit">
        <div class="input login-input form-group">
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

    <!-- start password -->
    <div class="unit">
        <div class="input login-input">
            <label class="icon-left" for="password">
                <i class="zmdi zmdi-key"></i>
            </label>
            <input class="form-control login-frm-input"  type="password" id="password" name="password" placeholder="Password">
                <span class="hint">
<!--                    <a  href="<?php echo e(url('/password/reset')); ?>" class="link">Forgot password?</a>-->
                </span>
        </div>
    </div>
    <!-- end password -->


    <!-- start keep logged -->
<!--
    <div class="unit">
        <label class="checkbox">
            <input type="checkbox" name="logged" value="true" checked="">
            <i></i>
            Keep me logged in
        </label>
    </div>
-->
    <!-- end keep logged -->

    <!-- start response from server -->
    <div class="response"></div>
    <!-- end response from server -->

  </div>

  <div class="login-form-footer">
    <button type="submit" class="btn-block btn btn-primary">Sign in</button>
  </div>

</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.outside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>