<div class="widget-wrap">
    <div class="widget-header block-header margin-bottom-0 clearfix">
        <div class="pull-left">
          <div class="recent-users-list">
            <div class="user-intro">
                <div class="user-thumb"><a href="/project/<?php echo e($post->idea->id); ?>"><img style="width: auto; border-radius: 0; padding-right: 15px;" src="<?php echo e($post->idea->logo  != "" ? $post->idea->logo : asset('images/avatar/amarkdalen.jpg')); ?>" alt="user"></a></div>
                <div class="users-info">
                    <ul>
                        <?php if($post->type == 'chat'): ?>
                          <li class="name"><a href="/project/<?php echo e($post->user->idea['id']); ?>"><?php echo e($post->user->name); ?></a> <small class="text-muted emphasized"> <i class="zmdi zmdi-chevron-right"></i></small> <a href="/project/<?php echo e($post->idea->id); ?>"><?php echo e($post->idea->name); ?></a></li>
                        <?php elseif($post->type == 'question'): ?>
                          <li class="name"><a href="/project/<?php echo e($post->user->idea['id']); ?>"><?php echo e($post->user->idea['name']); ?></a></li>
                        <?php else: ?>
                          <li class="name"><a href="/project/<?php echo e($post->user->idea['id']); ?>"><?php echo e($post->user->idea['name']); ?></a><small class="text-muted"> <?php echo e($post->title); ?></small></li>
                        <?php endif; ?>

                        <li class="u-location"> <i class="zmdi zmdi-time"></i> <?php echo e($post->created_at->diffForHumans()); ?></li>
                    </ul>
                </div>
            </div>

            <div class="user-intro">
                <?php if(strstr($post->content, "\n")): ?>
                    <div class="post-body" style="white-space:pre;"><?php echo e($post->content); ?></div>
                <?php else: ?>
                    <div class="post-body"><?php echo e($post->content); ?></div>
                <?php endif; ?>

                <div class="post-tags">

                    <?php if($post->tags->count() > 0): ?>
                        <?php foreach($post->tags as $tag): ?>
                            <label class="label label-tag">#<?php echo e($tag->name); ?> </label>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </div>

            </div>

          </div>
        </div>
    </div>

    <?php echo $__env->make('includes.comments.all', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>
