<div class="widget-wrap">
    <div class="widget-header block-header margin-bottom-0 clearfix">
        <div class="pull-left">
          <div class="recent-users-list">
            <div class="user-intro">
                <div class="user-thumb"><a href="#"><img src="images/avatar/amarkdalen.jpg" alt="user"></a></div>
                <div class="users-info">
                    <ul>
                        <li class="u-name"><a href="/project/<?php echo e($post->user->idea['id']); ?>"><?php echo e($post->user->idea['name']); ?></a><small class="text-muted"> <?php echo e($post->title); ?></small></li>
                        <li class="u-location"> <i class="zmdi zmdi-time"></i> <?php echo e($post->created_at->diffForHumans()); ?></li>
                    </ul>
                </div>
            </div>
              
            <div class="user-intro">
                <div class="post-body">
                    <?php echo e($post->content); ?>

                </div>
                <div class="post-tags">
                    <label class="label label-primary label-tag">#update</label> 
                    <label class="label label-primary label-tag">#equity</label> 
                    <label class="label label-primary label-tag">#studentsofstrength</label>          
                    <label class="label label-primary label-tag">#radnow</label>            
                </div>

            </div>

          </div>
        </div>
    </div>
        
    <?php echo $__env->make('includes.comments.all', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>    

</div>
