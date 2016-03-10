<?php $__env->startSection('content'); ?>


  <div class="row">
      
    <div class="col-md-6 col-md-offset-3">
        <?php echo $__env->make('includes.posts.make', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <?php echo $__env->make('includes.posts.all', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
  </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>

jQuery.fn.autoGrow = function(options) {
	return this.each(function() {
		var settings = jQuery.extend({
			extraLine: false,
		}, options);

		var createMirror = function(textarea) {
			jQuery(textarea).after('<div class="autogrow-textarea-mirror"></div>');
			return jQuery(textarea).next('.autogrow-textarea-mirror')[0];
		}

		var sendContentToMirror = function (textarea) {
			mirror.innerHTML = String(textarea.value)
				.replace(/&/g, '&amp;')
				.replace(/"/g, '&quot;')
				.replace(/'/g, '&#39;')
				.replace(/</g, '&lt;')
				.replace(/>/g, '&gt;')
				.replace(/ /g, '&nbsp;')
				.replace(/\n/g, '<br />') +
				(settings.extraLine? '.<br/>.' : '')
			;

			if (jQuery(textarea).height() != jQuery(mirror).height())
				jQuery(textarea).height(jQuery(mirror).height());
		}

		var growTextarea = function () {
			sendContentToMirror(this);
		}

		// Create a mirror
		var mirror = createMirror(this);
		
		// Style the mirror
		mirror.style.display = 'none';
		mirror.style.wordWrap = 'break-word';
		mirror.style.whiteSpace = 'normal';
		mirror.style.padding = jQuery(this).css('paddingTop') + ' ' + 
			jQuery(this).css('paddingRight') + ' ' + 
			jQuery(this).css('paddingBottom') + ' ' + 
			jQuery(this).css('paddingLeft');
			
		mirror.style.width = jQuery(this).css('width');
		mirror.style.fontFamily = jQuery(this).css('font-family');
		mirror.style.fontSize = jQuery(this).css('font-size');
		mirror.style.lineHeight = jQuery(this).css('line-height');
		mirror.style.letterSpacing = jQuery(this).css('letter-spacing');

		// Style the textarea
		this.style.overflow = "hidden";
		this.style.minHeight = this.rows+"em";

		// Bind the textarea's event
		this.onkeyup = growTextarea;

		// Fire the event for text already present
		sendContentToMirror(this);

	});
};

		$(document).ready(function() {
            $('.grower').each(function() {
                var currentElement = $(this);
                currentElement.autoGrow();
            });;
		});
</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>