<div id="comment-<?php echo e($comment->id); ?>-show"></div>

<div style="display: none;" id="reply-<?php echo e($comment->id); ?>" class="recent-comments col-xs-offset-<?php echo e($comment->depth + 1); ?>">
    <div class="recent-comment-meta">
        <div class="comment-user-thumb">
            <a href="#"><img src="<?php echo e(asset('images/avatar/oykun.jpg')); ?>" alt="user"></a>
        </div>
        <div class="comment-user-info">
            <ul>
                <li class="u-name">
                    <form id="comment-box" action="/reply" method="post">
                        <input type="hidden" name="comment-id" value="comment-<?php echo e($comment->id); ?>">
                        <input type="hidden" name="depth" value="<?php echo e($comment->depth + 1); ?>">

                        <textarea spellcheck="false" style="resize: none;" rows="1" name="message" class="form-control comment" placeholder="Write your reply..."></textarea>
                    </form>
                </li>

            </ul>
        </div>
    </div>
</div>


<?php $__env->startSection('scripts'); ?>
    @parent
    
    <script id="add-the-comment" type="text/template">
        <div id="add-offset" class="recent-comments">
            <div class="recent-comment-meta">
                <div class="comment-user-thumb">
                    <a href="#"><img src="<?php echo e(asset('images/avatar/oykun.jpg')); ?>" alt="user"></a>
                </div>
                <div class="comment-user-info">
                    <ul>
                        <li class="u-name">
                            <a style="color:#17bab8;" href="#"><b><span id="new-comment-name"></span></b></a> 
                            <span id="new-comment-content"></span>
                        </li>
                        <li class="comment-info">
                            <span class="p-time"><i class="zmdi zmdi-time"></i> Now</span>

                            <?php if( Auth::user()->idea_id == $post->user->idea['id'] ): ?>
                                &nbsp; &middot; &nbsp;
                                <span class="p-time"><a class="action-link">Thank</a></span>
                            <?php endif; ?>

                            &nbsp; &middot; &nbsp;
                            <span class="p-time"> <a id="<?php echo e($comment->id); ?>" class="action-link reply-link">Reply</a></span>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </script>



<?php $__env->stopSection(); ?>