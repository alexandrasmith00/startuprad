<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Here are users</div>

                <div class="panel-body">
                    All projects in current user's cohorts
                    <br>
<!--
                    <table class="table table-striped">
                        <tbody>
-->
                            
                            <?php foreach(Auth::user()->cohorts as $cohort): ?>
                                <?php echo e($cohort->name); ?>

                    
                                <?php foreach($cohort->ideas as $project): ?>
                                    <a href="/project/show/<?php echo e($project->id); ?>"> <?php echo e($project->name); ?></a><br>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                            
<!--
                        </tbody>
                    </table>
                    
-->
                
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>