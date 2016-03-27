<div class="widget-wrap" style="padding-top: 0px;">
<div class="widget-container margin-top-0">
    <div class="widget-content">
        <div class="recent-comments-list">
                    
            <form id="post-box" action="" method="post">
                <input type="hidden" name="idea-id" value="<?php echo e(Auth::user()->idea->id); ?>">
                <input type="hidden" name="user-id" value="<?php echo e(Auth::user()->id); ?>">

                <textarea  spellcheck="false" style="resize: none; overflow: hidden; word-wrap: break-word; height: 62px;" name="message" class="form-control comment" placeholder="<?php echo e($placeholder); ?>"></textarea>
                <input name="tags" type="text" id="little-tags" class="tags tags-input" data-type="highlighted-tags" data-highlight-color="#e6e39c" value="#RADNOW"/>
                <button id="post-button" class="btn btn-link btn-block btn-loadmore" style="padding: 6px 12px; text-transform: capitalize;"><?php echo e($button); ?></button>

            </form>

        </div>
    </div>
</div>
</div>

<?php $__env->startSection('scripts'); ?>
@parent

<script  src="<?php echo e(asset('js/lib/jquery.tagsinput.js')); ?>"></script>


<script>
// Initialize Code
if ($.fn.tagsInput) {ut.

    $('.tags-input').each(function() {
        var tagsType = $(this).data('type')
        var highlightColor = $(this).data('highlight-color')
        if (tagsType === 'tags') {
            $(this).tagsInput({
                width: 'auto'
            });
        }
        if (tagsType === 'highlighted-tags') {
            $(this).tagsInput({
                width: 'auto',
                onChange: function(elem, elem_tags) {
                    var actions = ['#update', '#ask', '#share'];
                    $('.tag', elem_tags).each(function() {
                        if ($(this).text().search(new RegExp('\\b(' + actions.join('|') + ')\\b')) >= 0) $(this).css('background-color', highlightColor);
                    });
                    var fields = ['#name', '#team', '#tagline', '#site', '#logo', '#description', '#market', '#product', '#organization', '#slidedeck', '#pitch'  ];
                    $('.tag', elem_tags).each(function() {
                        if ($(this).text().search(new RegExp('\\b(' + fields.join('|') + ')\\b')) >= 0) $(this).css('background-color', highlightColor);
                    });
                    
                }
            });
        }
    });
}
    
    

</script>
<?php $__env->stopSection(); ?>