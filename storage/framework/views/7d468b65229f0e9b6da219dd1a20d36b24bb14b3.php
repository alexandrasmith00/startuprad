<div class="recent-comments col-xs-offset-<?php echo e($comment->depth); ?>">
    <div class="recent-comment-meta">
        <div class="comment-user-thumb">
            <a href="#"><img src="<?php echo e(asset('images/avatar/oykun.jpg')); ?>" alt="user"></a>
        </div>
        <div class="comment-user-info">
            <ul>
                <li class="name">
                    <a class="subtle" href="#"><?php echo e($comment->user->name); ?></a>
                    <?php echo e($comment->body); ?>

                </li>
                <li class="comment-info">
                    <span class="p-time"><i class="fa fa-clock-o"></i>  <?php echo e($comment->created_at->diffForHumans()); ?></span>

                    <?php if( Auth::user()->idea_id == $post->user->idea['id'] ): ?>
                        &nbsp; &middot; &nbsp;
                        <span class="p-time"><a id="<?php echo e($comment->id); ?>" class="thank-comment action-link">Thank</a></span>
                    <?php endif; ?>

                    &nbsp; &middot; &nbsp;
                    <span class="p-time"> <a id="<?php echo e($comment->id); ?>"class="action-link reply-link">Reply</a></span>

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

