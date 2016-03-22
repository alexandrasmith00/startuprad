
<form class="form-horizontal">
    <div class="form-group">
        <div class="col-md-12">
            <input type="text" id="little-tags" class="tags tags-input" data-type="highlighted-tags" data-highlight-color="#e6e39c" value="#RADNOW, #update,#ask,#share,#name,#team,#tagline,#site,#logo,#description,#market,#product,#organization,#slidedeck,#pitch"/>
        </div>
    </div>
</form>
                          

<?php $__env->startSection('scripts'); ?>

<script  src="<?php echo e(asset('js/lib/jquery.tagsinput.js')); ?>"></script>


<script>
// Initialize Code
if ($.fn.tagsInput) {
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

                    
                }
            });
        }
    });
}

</script>

<?php $__env->stopSection(); ?>