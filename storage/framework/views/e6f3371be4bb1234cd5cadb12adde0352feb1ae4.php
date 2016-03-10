<div class="box box-widget">
<!--
    
  <div class='box-header with-border'>
    <div class='user-block'>
      <img class='img-circle' src="<?php echo e(Auth::user()->profile_picture != "" ? Auth::user()->profile_picture : 'http://www.startuprad.com/assets/images/db414718.default_no_profile.jpg'); ?>" alt='user image'>
      <span class='username'><a href="/project/<?php echo e(Auth::user()->idea->id); ?>"><?php echo e(Auth::user()->idea->name); ?>  </a><small class="text-muted"><?php echo e(Auth::user()->name); ?></small> </span>
      <span class='description'><em>Now</em></span>
    </div>
    <div class='box-tools'>
      <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
      <button class='btn btn-box-tool' data-widget='remove'><i class='fa fa-times'></i></button>
    </div>
  </div>
-->
    
  <div class='box-body'>
    <div class="actions-on-post">   
    <small>
      <span class="post-actions">Update profile field</span>
      <span class="post-actions">Add media</span>
      <span class="post-actions">Comment</span>
    </small>
    </div>
    <textarea id="target" type="text" class="form-control input-sm" placeholder="Ask a question, share something interesting, or update your profile"></textarea>
      <button>Post</button>
  </div>
    
</div>