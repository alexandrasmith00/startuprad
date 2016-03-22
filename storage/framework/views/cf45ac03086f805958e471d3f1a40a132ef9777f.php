<aside class="rightbar">
  <div class="rightbar-container">
    
    <?php echo $__env->make('includes.sidebar-right.chat', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <ul class="nav nav-tabs material-tabs rightbar-tab" role="tablist">
        <li class="active"><a href="#chat" aria-controls="message" role="tab" data-toggle="tab">Chat</a></li>
        <li><a href="#activities" aria-controls="notifications" role="tab" data-toggle="tab">Activities</a></li>
    </ul>
    
    <div class="tab-content">
        <?php echo $__env->make('includes.sidebar-right.chat-pane', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('includes.sidebar-right.activity-pane', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
  </div>
</aside>