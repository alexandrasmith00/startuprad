<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Here is a single user account</div>

                <div class="panel-body">
                    
                    <h4>Info:</h4>
                    <p><?php echo e($user->first); ?> <?php echo e($user->last); ?> (<?php echo e($user->email); ?>)</p>

    <br/><br/>
                    <h4>Working On:</h4>
                    <ul>
                    <?php foreach($user->teams as $team): ?>
                        <li>

                        <?php foreach($team->idea as $idea): ?>
                            <b><a href="/project/<?php echo e($idea->id); ?>"><?php echo e($idea->name); ?>: <?php echo e($idea->tagline); ?> </a></b><br/>
                            <a href="<?php echo e($idea->website); ?>"><?php echo e($idea->website); ?></a><br/>
                            <img src="<?php echo e($idea->logo); ?>"><br/>
                        <?php endforeach; ?>
                        
                        <br/>Team Members:<br/><br/>
                        <?php foreach($team->users as $member): ?>
                            <a href="/account/show/<?php echo e($member->id); ?>"><?php echo e($member->name); ?></a><br/>
                        <?php endforeach; ?>
                        </li><br/><br/><br/>
                   
                    <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>