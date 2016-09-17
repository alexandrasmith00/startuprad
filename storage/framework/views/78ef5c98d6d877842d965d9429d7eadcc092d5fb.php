<div class="user-intro">
  <ul class="profile-social-links">
    <?php if( $idea->linkedin() ): ?> <li><a href='<?php echo e(linkout($idea->linkedin())); ?>'><i class="fa fa-lg fa-linkedin blue"></i></a></li><?php endif; ?>
    <?php if( $idea->facebook() ): ?> <li><a href='<?php echo e(linkout($idea->facebook())); ?>'><i class="fa fa-lg fa-facebook blue"></i></a></li><?php endif; ?>
    <?php if( $idea->twitter() ): ?> <li><a href='<?php echo e(linkout($idea->twitter())); ?>'><i class="fa fa-lg fa-twitter blue"></i></a></li><?php endif; ?>
  </ul>
</div>
