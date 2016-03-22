    <div class="widget-wrap">
    <div class="widget-header block-header margin-bottom-0 clearfix">
        <div class="pull-left">
          <div class="recent-users-list">
            <div class="user-intro">
                <div class="user-thumb"><a href="#"><img src="images/avatar/amarkdalen.jpg" alt="user"></a></div>
                <div class="users-info">
                    <ul>
                        <li class="u-name"><a href="/project/{{ $post->user->idea->id }}">{{ $post->user->idea->name }}</a><small class="text-muted">{{ $post->title }}</small></li>
                        <li class="u-location"> <i class="zmdi zmdi-time"></i> {{ $post->created_at->diffForHumans() }}</li>
                    </ul>
                </div>
            </div>
              
            <div class="user-intro">
                <div class="post-body">
                    {{ $post->content }}
                </div>
                <div class="post-tags">
                    <label class="label label-primary label-tag">#update</label> 
                    <label class="label label-primary label-tag">#equity</label> 
                    <label class="label label-primary label-tag">#studentsofstrength</label>          
                    <label class="label label-primary label-tag">#radnow</label>            
                </div>

            </div>

          </div>
        </div>
    </div>
        
        
    <div class="widget-container margin-top-0">
        <div class="widget-content">
            <div class="recent-comments-list">
                <div class="recent-comments">
                    <div class="recent-comment-meta">
                        <div class="comment-user-thumb">
                            <a href="#"><img src="images/avatar/oykun.jpg" alt="user"></a>
                        </div>
                        <div class="comment-user-info">
                            <ul>
                                <li class="u-name"><a href="#">Allen V. Ellingsworth</a></li>
                                <li class="p-time"><i class="zmdi zmdi-time"></i> 30 Min Ago</li>
                            </ul>
                        </div>
                        <span class="comments-reply"><a href="#"><i class="zmdi zmdi-mail-reply"></i></a></span>
                    </div>
                    <div class="comment-text">
                        <p>As long as you are reasonably careful about where you step and avoid putting ...</p>
                    </div>
                </div>
                <div class="recent-comments">
                    <div class="recent-comment-meta">
                        <div class="comment-user-thumb">
                            <a href="#"><img src="images/avatar/mikeluby.jpg" alt="user"></a>
                        </div>
                        <div class="comment-user-info">
                            <ul>
                                <li class="u-name"><a href="#">John J. Markham</a></li>
                                <li class="p-time"><i class="zmdi zmdi-time"></i> 1 Hour Ago</li>
                            </ul>
                        </div>
                        <span class="comments-reply"><a href="#"><i class="zmdi zmdi-mail-reply"></i></a></span>
                    </div>
                    <div class="comment-text">
                        <p>Lastly we see him an old man, weak and ailing. The rungs of the ladder have all been climbed, and only a black abyss yawns before his faltering foot.</p>
                    </div>
                </div>
                <div class="recent-comments">
                    <div class="recent-comment-meta">
                        <div class="comment-user-thumb">
                            <a href="#"><img src="images/avatar/mds.jpg" alt="user"></a>
                        </div>
                        <div class="comment-user-info">
                            <ul>
                                <li class="u-name"><a href="#">Ronald S. Hawkins</a></li>
                                <li class="p-time"><i class="zmdi zmdi-time"></i> 2 Hours Ago</li>
                            </ul>
                        </div>
                        <span class="comments-reply"><a href="#"><i class="zmdi zmdi-mail-reply"></i></a></span>
                    </div>
                    <div class="comment-text">
                        <p>A Being, clad in Grey, is speaking. He is speaking of the Life of Man.</p>
                    </div>
                </div>
                <button class="btn btn-link btn-block btn-loadmore">Load More</button>
            </div>
        </div>
    </div>
</div>
