<?php if($posts->count() > 0): ?>
  <?php foreach($posts as $post): ?>
    <?php echo $__env->make('includes.posts.single', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endforeach; ?>
<?php endif; ?>