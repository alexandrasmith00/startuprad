<div class="row">
    <div class="col-sm-2">
        <div class="profile-fieldname"><?php echo e($fieldname); ?></div>
    </div>  
    <div class="col-sm-10">
        <?php if($fieldbody): ?>
            <?php echo e($fieldbody); ?>

        <?php else: ?>
            <i><?php echo e($project->name); ?> has not thought about their <span style="text-transform:lowercase;"><?php echo e($fieldname); ?></span> yet. </i>
        <?php endif; ?>
    </div>
</div>