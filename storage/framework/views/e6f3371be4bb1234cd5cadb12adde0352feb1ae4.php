<div class="widget-wrap" style="padding-top: 0px;">
<div class="widget-container margin-top-0">
    <div class="widget-content">
        <div class="recent-comments-list">

            <form id="post-box" action="" method="post" data-parsley-validate>
                <input name="_method" type="hidden" value="POST">
                <input type="hidden" name="user-id" value="<?php echo e(Auth::user()->id); ?>">
                <?php if($isYours): ?>
                  <input type="hidden" name="idea-id" value="<?php echo e(Auth::user()->idea->id); ?>">
                  <input type="hidden" name="type" value="question">
                <?php else: ?>
                  <input type="hidden" name="idea-id" value="<?php echo e($project->id); ?>">
                  <input type="hidden" name="type" value="chat">
                <?php endif; ?>

                <textarea data-parsley-required id="make-post-textarea" spellcheck="false" style="resize: none; overflow: hidden; word-wrap: break-word; height: 62px;" name="message" class="form-control comment" placeholder="<?php echo e($placeholder); ?>"></textarea>
                <input name="tags" type="text" id="little-tags" class="tags tags-input" data-type="highlighted-tags" data-highlight-color="#e6e39c" value="#RADNOW"/>
                <button id="post-button" class="btn btn-link btn-block btn-loadmore" style="padding: 6px 12px; text-transform: capitalize;"><?php echo e($button); ?></button>

            </form>


        </div>
    </div>
</div>
</div>

<?php $__env->startSection('scripts'); ?>

    @parent

    <?php echo $__env->make('js.post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('templates.new-post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <script  src="<?php echo e(asset('js/lib/jquery.tagsinput.js')); ?>"></script>

<?php $__env->stopSection(); ?>
