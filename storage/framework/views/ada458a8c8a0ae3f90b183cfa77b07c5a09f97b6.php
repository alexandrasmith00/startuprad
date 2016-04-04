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
                <label ><?php echo e($field->descriptor); ?>:</label> <?php echo e($field->value); ?>

            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>


<?php $__env->startSection('scripts'); ?>
@parent
    
  

    <script id="team-<?php echo e($team[0]->thinking_id); ?>-add-to-form" type="text/template">
        <input type="hidden" name="type" value="editteam">
        <input type="hidden" id="resource_id" name="resource_id" value="<?php echo e($team[0]->thinking_id); ?>">
        

        <div class="unit">
            <label class="label">Name</label>
            <div class="input">
                <input class="form-control" type="text" name="team-name" placeholder="<?php foreach($team as $field): ?><?php if($field->descriptor == 'Name'): ?><?php echo e($field->value); ?> <?php endif; ?> <?php endforeach; ?>"/> 
            </div>
        </div>
       
        
        <div class="unit">
            <label class="label">Role</label>
            <div class="input">
                <input class="form-control" type="text" name="team-role" placeholder="<?php foreach($team as $field): ?><?php if($field->descriptor == 'Role'): ?><?php echo e($field->value); ?> <?php endif; ?> <?php endforeach; ?>"/> 
            </div>
        </div>
 
        <div class="unit">
            <label class="label">Email</label>
            <div class="input">
                <input class="form-control" type="text" name="team-email" placeholder="<?php foreach($team as $field): ?><?php if($field->descriptor == 'Email'): ?><?php echo e($field->value); ?> <?php endif; ?> <?php endforeach; ?>"/> 
            </div>
        </div>

    </script>

<?php $__env->stopSection(); ?>