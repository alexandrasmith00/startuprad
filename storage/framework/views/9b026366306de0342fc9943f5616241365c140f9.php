<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">this is your project. go ahead and edit!</div>

                <div class="panel-body">
                             <?php echo $__env->make('projects.profile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="edit-modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label id="update-label" for="edit-field"></label>
            <input type="text" class="form-control" id="edit-field" autofocus>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary update-field">Update</button>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <?php echo $__env->make('js.profile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    <script>    
        Pusher.log = function(msg) {
              console.log(msg);
            };

        var pusher = new Pusher('<?php echo e(env("PUSHER_KEY")); ?>');

        var editschannel = pusher.subscribe('<?php echo e($editsChannel); ?>');
        editschannel.bind('something-edited', updateDisplay);

    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>