<?php $__env->startSection('content'); ?>

        <form  id="login-form" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

                <input type="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email">

                <?php if($errors->has('email')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>
                
            </div>
            
            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">

                <input type="password" name="password" placeholder="Password">

                <?php if($errors->has('password')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            
            <div class="form-non-input">
                <button type="submit" class="btn">Login</button>
            </div>
            
            <div class="form-non-input">
                <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">Forgot Your Password?</a>
            </div>
            
		</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.full-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>