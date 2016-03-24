<div class="widget-container margin-top-0">
    <div class="widget-content">
        <div class="recent-comments-list">
            <?php if($post->comments()->count() > 0): ?>
                <?php foreach($post->comments as $comment): ?>
                    <?php echo $__env->make('includes.comments.comment', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php endforeach; ?>
            <?php endif; ?>
            
            <?php echo $__env->make('includes.comments.make', ['action' => 'Comment'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            
        </div>
    </div>
</div>
