<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Here are users</div>

                <div class="panel-body">
                    All users
                    
                    <table class="table table-striped">
                        <tbody>
                        <?php foreach($users as $user): ?>
                            <tr>
                                <td><?php echo e($user->first); ?> <?php echo e($user->last); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td>
                                    <?php echo $__env->make('format.roles', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    
                
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>