<div class="widget-wrap stats-widget">
    <img class="img-responsive img-center" src="<?php echo e($project->logo != "" ? $project->logo : 'http://static1.squarespace.com/static/54fe5d59e4b038fd96c9a7c5/550a1fa1e4b0fca40dc6f6b1/550a1fa1e4b03c7ec206969d/1426726818023/Placeholder+Logo.png'); ?>">
    <h3 class="profile-username text-center"><?php echo e($project->name); ?></h3>
    <p class="text-muted text-center"><?php echo e($project->tagline); ?> </p>
    <p class="text-muted text-center"><a href="http://<?php echo e($project->site); ?>"><?php echo e($project->site); ?> </a></p>
</div>

<?php echo $__env->make('includes.profile.team', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('includes.profile.social', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
