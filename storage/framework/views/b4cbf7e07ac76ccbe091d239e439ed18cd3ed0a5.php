<div class="chat-user-container">
    <h3 class="clearfix"><span class="pull-left">Teaching Staff</span><span class="pull-right online-counter">3 Online</span></h3>
    <ul class="chat-user-list">
    </ul>

    <?php foreach(Auth::user()->cohorts as $cohort): ?>
      <h3 class="clearfix">
      <span class="pull-left"><?php echo e($cohort->name); ?></span>
      <span class="pull-right online-counter">1 Online</span></h3>

      <ul class="chat-user-list">
        <?php foreach($cohort->ideas as $project): ?>
          <?php foreach($project->team->users as $member): ?>
            <?php echo $__env->make('includes.sidebar-right.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <?php endforeach; ?>
        <?php endforeach; ?>
      </ul>
    <?php endforeach; ?>
</div>
