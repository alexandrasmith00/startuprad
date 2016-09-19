
<div style="padding-top: 30px;" class="details">

  <?php if($edit): ?>
    <h4><a class="edit-section" href="<?php echo e(route('edit-organization')); ?>">Edit Organization &nbsp; <i class="fa fa-angle-right"></i></a></h4><br>
  <?php else: ?>
    <h4>Organization</h4><br>
  <?php endif; ?>


  <div class="row">
    <div class="col-xs-12  col-sm-10 col-sm-offset-1">

      <div class="form-line form-labels">

        <?php echo $__env->make('projects.sections.organization.legal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <hr>
        <?php echo $__env->make('projects.sections.organization.funding', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <hr>
        <?php echo $__env->make('projects.sections.organization.advisors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <hr>
        <?php echo $__env->make('projects.sections.organization.partnerships', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      </div>

    </div>
  </div>
</div>

