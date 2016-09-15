<div class="modal fade" id="invite-modal" tabindex="-1" role="dialog" aria-labelledby="invite-modal">
  <div style="margin-top: 100px; margin-bottom: 100px; position: absolute; overflow: scroll;background-color: white;" class="holder col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
      <button style="margin-top: 10px;" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <br>

        <h3>Invite these teams</h3>


        <?php if( Session::has('invite-modal') ): ?>
            <?php foreach( Session::get('invite-modal')[0] as $invite): ?>
                <p><?php echo e($invite); ?></p>
            <?php endforeach; ?>
            <?php foreach( Session::get('invite-modal')[1] as $invite): ?>
                <p><?php echo e($invite); ?></p>
            <?php endforeach; ?>
        <?php endif; ?>

        <form action="<?php echo e(route('sending-student-invites')); ?>">
          <button style="margin-top: 50px; margin-bottom: 25px;" class="btn oversized-btn btn-blue" type="submit">Invite</button>
        </form>

  </div>
</div>


<?php $__env->startSection('scripts'); ?>
@parent
<script>
  if ("<?php echo e(Session::has('invite-modal')); ?>")
    $('#invite-modal').modal('show');

</script>
<?php $__env->stopSection(); ?>


