<!-- <div class="individual-user info-expand">-->
<div class="individual-user">
    <div class="user-intro">
<!--        <div class="user-thumb"><a href="#"><img src="images/avatar/bobbyjkane.jpg" alt="user"></a></div>-->
        <div class="users-info">
            <ul>
                
                <?php foreach($team as $field): ?>
                    <?php if($field->descriptor == 'Name'): ?>
                        <li class="u-name"><a href="#"><?php echo e($field->value); ?></a></li>
                    <?php elseif($field->descriptor == 'Role'): ?>
                        <li class="u-location"><?php echo e($field->value); ?></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
        <span class="user-details-toggle"><i class="zmdi"></i></span>
    </div>
    <div class="users-details">
        <?php foreach($team as $field): ?>
            <?php if($field->descriptor != 'Name' && $field->descriptor != 'Role'): ?>
                <label><?php echo e($field->descriptor); ?>:</label> <?php echo e($field->value); ?>

            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>