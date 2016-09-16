<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-7 col-md-offset-2 col-sm-12">

    <div style="padding-left: 0px; padding-right: 0px;" class="widget-wrap">
      <div style="padding-left: 30px; padding-right: 30px; margin-left: 0px; margin-right: 0px;" class="widget-header block-header margin-bottom-0 clearfix">
        <div class="row">
          <div class="user-header-left col-xs-12 col-sm-8">

            <div class="user-intro">
              <div class="user-thumb"><a href=""><img src="<?php echo e($idea->logo); ?>" alt="user"></a></div>
              <div class="users-info">
                <ul>
                  <li class="name"><a><?php echo e($idea->name); ?></a></li>
                  <li class="u-location">Cambridge, MA</li>
                </ul>
              </div>
            </div>

          </div>

          <div class="user-header-right col-xs-12 col-sm-4">

            <div class="user-intro">
              <ul class="profile-social-links">
                <?php if( $idea->linkedin() ): ?> <li><a href='<?php echo e($idea->linkedin()); ?>'><i class="fa fa-lg fa-linkedin blue"></i></a></li><?php endif; ?>
                <?php if( $idea->facebook() ): ?> <li><a href='<?php echo e($idea->facebook()); ?>'><i class="fa fa-lg fa-facebook blue"></i></a></li><?php endif; ?>
                <?php if( $idea->twitter() ): ?> <li><a href='<?php echo e($idea->twitter()); ?>'><i class="fa fa-lg fa-twitter blue"></i></a></li><?php endif; ?>
              </ul>
            </div>

          </div>
        </div>
      </div>


      <div style="padding-left: 30px; padding-right: 30px; margin-top: 25px;" class="row">
        <div class="col-xs-12">
          <div  class="details">

            <h4>Team Information</h4><br>

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