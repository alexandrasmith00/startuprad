<div id="top-of-the-feed"></div>

<?php if($posts->count() > 0): ?>

  <div class="infinite-container">
    <?php foreach($posts as $post): ?>
    <div class="infinite-item">
      <?php echo $__env->make('includes.posts.single', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <?php endforeach; ?>
  </div>

  <div style="font-size: .3em;" class="loader">Loading...</div>
  <?php if( $posts->hasMorePages() ): ?>
    <a class="infinite-more-link" href="<?php echo e($posts->nextPageUrl()); ?>"></a>
  <?php endif; ?>

  <div id="inview-example"></div>

<?php endif; ?>

<?php $__env->startSection('scripts'); ?>
@parent

<script>
  var infinite = new Waypoint.Infinite({
    element: $('.infinite-container')[0],
  })


</script>

<?php $__env->stopSection(); ?>

