<?php $__env->startSection('scripts'); ?>
    @parent
    
    <script id="new-post" type="text/template">
      <div class="widget-wrap">
        <div class="widget-header block-header margin-bottom-0 clearfix">
          <div class="pull-left">
            <div class="recent-users-list">
              <div class="user-intro">
                <div class="user-thumb"><a href="#"><img src="<?php echo e(asset('images/avatar/amarkdalen.jpg')); ?>" alt="user"></a></div>
                <div class="users-info">           
                    <ul>               
                        <li id="add-post-header" class="u-name"></li>
                        <li class="u-location"> <i class="zmdi zmdi-time"></i> Just now</li>
                    </ul>
                </div>
              </div>
              
              <div class="user-intro">
                <div id="add-post-content" class="post-body">
                    
                </div>
                <div id="add-post-tags" class="post-tags">
                </div>
              </div>

            </div>
          </div>
        </div>
        

        <div class="widget-container margin-top-0">
            <div class="widget-content">
                <div class="recent-comments-list">
                    <div id="post--show"></div>

                    <form id="big-comment-box" action="/reply" method="post">
                      <input type="hidden" name="comment-id">
                      <textarea spellcheck="false" style="resize: none;" name="message" class="form-control comment" placeholder="Add a thought..."></textarea>
                      <button class="btn btn-link btn-block btn-loadmore" style="padding: 6px 12px;"><i class="zmdi zmdi-comment-alt-text"></i> &nbsp; Comment </button>
                    </form>
                </div>
            </div>
        </div>

      </div>
    
    </script>
<?php $__env->stopSection(); ?>

