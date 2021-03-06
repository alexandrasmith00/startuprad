<a id="show-message" style="display: none;" data-toggle="collapse" data-target="#banner"></a>

<div id="banner" class="collapse">
  <div class="container">
    <div style="margin-bottom: 5px; margin-top: 5px;" class="alert" role="alert">
      <button type="button" class="close" data-toggle="collapse" data-target="#banner" aria-label="Close">
        <span>&times;</span>
      </button>
      <?php if( Session::has('flash-strong')): ?>
        <strong><?php echo e(Session::get('flash-strong')); ?></strong>
      <?php endif; ?>
      <span id="flash-message"><?php echo e(Session::get('flash-message')); ?></span>

    </div>
  </div>
</div>

<?php $__env->startSection('scripts'); ?>
@parent


<script>
  $( document ).ready(function() {
      if ( $('#flash-message').html() != '')
        $('#show-message').click();
  });
</script>

<?php $__env->stopSection(); ?>
