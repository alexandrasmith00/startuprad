<div class="widget-wrap">
    <div class="widget-header block-header margin-bottom-0 clearfix">
        <div class="pull-left">
          <div class="recent-users-list">
            <div class="user-intro">
                <div class="user-thumb"><a href="#"><img src="<?php echo e(asset('images/avatar/amarkdalen.jpg')); ?>" alt="user"></a></div>
                <div class="users-info">           
                    <ul>               
                        <?php if($post->type == 'chat'): ?>
                            <li class="u-name"><a href="/project/<?php echo e($post->user->idea['id']); ?>"><?php echo e($post->user->name); ?></a> <small class="text-muted"> <i style="color: #17bab8;"class="zmdi zmdi-chevron-right"></i></small> <a href="/project/<?php echo e($post->idea->id); ?>"><?php echo e($post->idea->name); ?></a></li>
                        <?php elseif($post->type == 'question'): ?>
                            <li class="u-name"><a href="/project/<?php echo e($post->user->idea['id']); ?>"><?php echo e($post->user->idea['name']); ?></a></li>
                        <?php else: ?>
                          <li class="u-name"><a href="/project/<?php echo e($post->user->idea['id']); ?>"><?php echo e($post->user->idea['name']); ?></a><small class="text-muted"> <?php echo e($post->title); ?></small></li>
                        <?php endif; ?>
                        
                        <li class="u-location"> <i class="zmdi zmdi-time"></i> <?php echo e($post->created_at->diffForHumans()); ?></li>
                    </ul>
                </div>
            </div>
              
            <div class="user-intro">
                <div class="post-body">
                    <?php echo e($post->content); ?>

                </div>
                <div class="post-tags">
                    
                    <?php if($post->tags->count() > 0): ?>
                        <?php foreach($post->tags as $tag): ?>
                            <label class="label label-primary label-tag">#<?php echo e($tag->name); ?> </label> 
                        <?php endforeach; ?>
                    <?php endif; ?>
                    
                </div>

            </div>

          </div>
        </div>
    </div>
        
    <?php echo $__env->make('includes.comments.all', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>    

</div>
