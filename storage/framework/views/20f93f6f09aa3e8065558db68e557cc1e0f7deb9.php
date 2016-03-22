<?php if($post->comments()->count() > 0): ?>
    <div class="widget-container margin-top-0">
        <div class="widget-content">
            <div class="recent-comments-list">
                <?php foreach($post->comments as $comment): ?>
                    <?php echo $__env->make('includes.comments.comment', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php endforeach; ?>
                
                <button class="btn btn-link btn-block btn-loadmore"><i class="zmdi zmdi-comment-alt-text"></i> &nbsp;Comment</button>

            </div>
        </div>
    </div>
<?php endif; ?>