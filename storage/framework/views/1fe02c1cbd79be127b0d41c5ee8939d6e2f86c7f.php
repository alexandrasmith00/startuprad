<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-8 col-md-offset-2 col-sm-12">
    <div class="widget-wrap">

      <?php echo $__env->make('projects.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <div style="padding-top: 30px;" class="details">
        <h4>Team Information</h4><br>

        <div class="row">
          <div class="col-xs-12  col-sm-10 col-sm-offset-1">

                <?php foreach($idea->instructor() as $instructor): ?>
                    <div class="form-line form-labels">
                      <div class="row">
                        <div class="col-sm-4 col-xs-12">
                          <label><strong>Instructor</strong></label>
                        </div>
                        <div class="col-sm-8 col-xs-12">
                          <p>
                            <?php echo e($instructor->name); ?><a href="<?php echo e(route('profile', ['id' => $instructor->id ])); ?>"> <i class="fa fa-angle-right"></i></a><br>
                            <a href=""><?php echo e($instructor->email); ?></a>
                          </p>
                        </div>
                      </div>
                    </div>
                <?php endforeach; ?>

                <?php foreach($idea->TFs() as $instructor): ?>
                <div class="form-line form-labels">
                  <div class="row">
                    <div class="col-sm-4 col-xs-12">
                      <label><strong>Teaching Fellow</strong></label>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                      <p>
                        <?php echo e($instructor->name); ?><a href="<?php echo e(route('profile', ['id' => $instructor->id ])); ?>"> <i class="fa fa-angle-right"></i></a><br>
                        <a href=""><?php echo e($instructor->email); ?></a>
                      </p>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>

          </div>
        </div>
      </div>

    </div>

    <?php echo $__env->make('includes.posts.all', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>