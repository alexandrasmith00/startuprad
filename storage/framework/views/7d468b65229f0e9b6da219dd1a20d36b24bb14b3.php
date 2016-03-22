<div class="box-comment col-xs-offset-<?php echo e($comment->depth); ?>">
    <!-- User image -->
    <img class='img-circle img-sm' src='../dist/img/user3-128x128.jpg' alt='user image'>
    <div class='comment-text'>
      <span class="username">
        <?php echo e($comment->user->name); ?> <small><a>Like </a> <a>Reply </a></small>
        <span class='text-muted pull-right'><?php echo e($comment->created_at->diffForHumans()); ?></span>
      </span><!-- /.username -->
      <?php echo e($comment->body); ?>

    </div><!-- /.comment-text -->
</div><!-- /.box-comment -->

<?php if($comment->hasChildren()): ?>
    <?php foreach($comment->getChildren() as $child): ?>
        <?php echo $__env->make('includes.comments.comment_child', ['comment' => $child], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endforeach; ?>
<?php endif; ?>
