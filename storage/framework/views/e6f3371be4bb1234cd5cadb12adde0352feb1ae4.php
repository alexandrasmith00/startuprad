<div class="page-header filled light">
    <div class="row">
        <div class="col-md-7 col-sm-7">
        </div>
        <div class="col-md-5 col-sm-5">
            <?php echo $__env->make('includes.posts.tags', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
</div>