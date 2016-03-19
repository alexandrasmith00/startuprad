<div class="box box-widget">
    <div class='box-header with-border'>

      <div class='user-block'>
          
        <img class='img-circle' src="<?php echo e($post->user->idea->logo != "" ? $post->user->idea->logo : 'http://static1.squarespace.com/static/54fe5d59e4b038fd96c9a7c5/550a1fa1e4b0fca40dc6f6b1/550a1fa1e4b03c7ec206969d/1426726818023/Placeholder+Logo.png'); ?>"  alt='user image'>
        <span class='username'><a href="#"><?php echo e($post->user->idea->name); ?></a> <small class="text-muted"><?php echo e($post->title); ?></small></span>
        <span class='description'><em><?php echo e($post->created_at->diffForHumans()); ?></em></span>
      </div>

      <div class='box-tools'>
        <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
<!--        <button class='btn btn-box-tool' data-widget='remove'><i class='fa fa-times'></i></button>-->
      </div>

    </div>

    <div class='box-body'>
      <!-- for images with media <img class="img-responsive pad" src="../dist/img/photo2.png" alt="Photo"> -->
      <p><?php echo e($post->content); ?></p>
    </div>

    <?php if($post->comments()->count() > 0): ?>
      <div class='box-footer box-comments'>
        <?php foreach($post->comments as $comment): ?>
            <?php echo $__env->make('includes.comments.comment', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endforeach; ?>
      </div><!-- /.box-footer -->
    <?php endif; ?>

    <div class="box-footer">
      <div class="actions-on-post"> 
        <small>
          <span class="post-actions"><button class='btn btn-default btn-xs'>Upvote</button></span>
          <span class="post-actions">Downvote</span>
          <span class="post-actions"> 
            Comment 
            <?php if($post->comments->count() != 0): ?>
              <span class="label">4</span>
            <?php endif; ?>
          </span>
        </small>  
      </div>

      <form action="#" method="post">
          <img class="img-responsive img-circle img-sm" src="<?php echo e(Auth::user()->profile_picture != "" ? Auth::user()->profile_picture : 'http://www.startuprad.com/assets/images/db414718.default_no_profile.jpg'); ?>" alt="your profile pic next to comment box">

          <div class="img-push">
          <?php if( $post->comments->count() == 0): ?>
            <textarea type="text" rows="2" class="grower form-control input-sm" placeholder="Be the first to comment"></textarea>
          <?php else: ?>
            <textarea type="text" rows="2" class="grower form-control input-sm" placeholder="Press enter to post comment"></textarea>
          <?php endif; ?>
        </div>
      </form>

    </div>
</div>
