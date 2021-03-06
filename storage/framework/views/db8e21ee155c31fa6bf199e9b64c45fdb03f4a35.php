<div id="comment-<?php echo e($comment->id); ?>-show"></div>

<div style="display: none;" id="reply-<?php echo e($comment->id); ?>" class="recent-comments col-xs-offset-<?php echo e($comment->depth + 1); ?>">
    <div class="recent-comment-meta">
        <div class="comment-user-thumb">
            <a href="#"><img src="<?php echo e(asset('images/avatar/oykun.jpg')); ?>" alt="user"></a>
        </div>
        <div class="comment-user-info">
            <ul>
                <li class="u-name">
                    <form id="comment-box" action="/reply" method="post" data-parsley-validate>
                        <input type="hidden" name="comment-id" value="comment-<?php echo e($comment->id); ?>">
                        <input type="hidden" name="depth" value="<?php echo e($comment->depth + 1); ?>">

                        <textarea data-parsley-required spellcheck="false" style="resize: none;" rows="1" name="message" class="form-control comment" placeholder="Write your reply..."></textarea>
                    </form>
                </li>

            </ul>
        </div>
    </div>
</div>

