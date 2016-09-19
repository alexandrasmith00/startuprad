<div style="padding-left: 30px; padding-right: 30px; margin-left: 0px; margin-right: 0px;" class="widget-header block-header margin-bottom-0 clearfix">
  <div class="row">
    <?php echo $__env->make('projects.includes.intro', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="user-header-right col-xs-12 col-sm-4">
      <?php echo $__env->make('projects.includes.social', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
  </div>
</div>
