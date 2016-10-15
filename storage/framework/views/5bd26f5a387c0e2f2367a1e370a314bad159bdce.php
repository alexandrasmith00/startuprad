<div class="recent-comments">
    <div class="recent-comment-meta">
        <div class="comment-user-thumb">
          <a href="#"><img style="border-radius: 4px;" src="<?php echo e($comment->user->profile_picture); ?>"></a>
        </div>
        <div class="comment-user-info">
            <ul>
                <li class="name">
                    <a href="<?php echo e(route('profile', ['id' => $comment->user->id ] )); ?>"><?php echo e($comment->user->name); ?></a>
                    <?php echo e($comment->body); ?>

                </li>
                <li class="comment-info">
                    <i class="fa fa-clock-o"></i>
                    <?php echo e($comment->created_at->diffForHumans()); ?>


                    <?php if( Auth::user()->idea_id == $post->user->idea['id'] ): ?>
                        &nbsp; &middot; &nbsp;
                        <a id="<?php echo e($comment->id); ?>" class="thank-comment">Thank</a>
                    <?php endif; ?>

                    &nbsp; &middot; &nbsp;
                    <a id="<?php echo e($comment->id); ?>" class="reply-link">Reply</a>
                </li>

            </ul>
        </div>
    </div>
</div>

<?php if($comment->hasChildren()): ?>
     <?php foreach($comment->getChildren() as $child): ?>
         <?php echo $__env->make('includes.comments.comment_child', ['comment' => $child], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
     <?php endforeach; ?>
 <?php endif; ?>

<?php echo $__env->make('includes.comments.make_reply', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>





