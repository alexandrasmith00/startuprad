<?php foreach($user->roles as $role): ?>
    <?php echo e($role->name); ?>, 
<?php endforeach; ?>