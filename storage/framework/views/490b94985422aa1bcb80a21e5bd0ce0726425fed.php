<?php $__env->startSection('content'); ?>

    <form id="login-form" class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/password/email')); ?>">
        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

            <input type="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email">

            <?php if($errors->has('email')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
            <?php endif; ?>
    
        </div>

            <div class="form-non-input">
                <button type="submit" class="btn">Send Password Reset Link</button>
            </div>
            
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.full-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>