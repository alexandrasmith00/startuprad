<div class="widget-wrap stats-widget">
    <img class="img-responsive img-center" src="<?php echo e($this_profile->logo->value != "" ? $this_profile->logo->value : 'http://static1.squarespace.com/static/54fe5d59e4b038fd96c9a7c5/550a1fa1e4b0fca40dc6f6b1/550a1fa1e4b03c7ec206969d/1426726818023/Placeholder+Logo.png'); ?>">
    <h3 class="profile-username text-center"><?php echo e($this_profile->name->value); ?></h3>
    <p class="text-muted text-center"><?php echo e($this_profile->tagline->value); ?> </p>
    <p class="text-muted text-center"><a href="<?php echo e($this_profile->site->value); ?>"><?php echo e($this_profile->site->value); ?> </a></p><br>
    
    <div class="row" style="padding-bottom: 25px;">
        <div class="col-xs-2 col-xs-offset-1"><a><i class="zmdi zmdi-globe zmdi-hc-lg"></i></a></div>
        <div class="col-xs-2"><a><i class="zmdi zmdi-email zmdi-hc-lg"></i></a></div>
        <div class="col-xs-2"><a><i class="zmdi zmdi-facebook zmdi-hc-lg"></i></a></div>
        <div class="col-xs-2"><a><i class="zmdi zmdi-linkedin-box zmdi-hc-lg"></i></a></div>
        <div class="col-xs-2"><a><i class="zmdi zmdi-twitter zmdi-hc-lg"></i></a></div>
    </div>
    
    <?php if($isYours): ?>
      <div class="recent-users-list">
        <button class="btn btn-link btn-block btn-loadmore editable">Edit Overview</button>
      </div>
    <?php endif; ?>
    
</div>

<?php echo $__env->make('includes.profile.team', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

