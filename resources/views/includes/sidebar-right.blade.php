  
<aside class="rightbar">
<div class="rightbar-container">
    
    @include('includes.sidebar-right.chat')

    <ul class="nav nav-tabs material-tabs rightbar-tab" role="tablist">
        <li class="active"><a href="#chat" aria-controls="message" role="tab" data-toggle="tab">Chat</a></li>
        <li><a href="#activities" aria-controls="notifications" role="tab" data-toggle="tab">Activities</a></li>
    </ul>
    
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="chat">
          
        <div class="chat-user-toolbar clearfix">
            <div class="chat-user-search pull-left">
                <span class="addon-icon"><i class="zmdi zmdi-search"></i></span>
                <input type="text" class="form-control" placeholder="Nonfunctional Search">
            </div>
            <div class="add-chat-list pull-right">
                <i class="zmdi zmdi-accounts-add"></i>
            </div>
        </div>
          
        <div class="chat-user-container">
            <h3 class="clearfix"><span class="pull-left">Teaching Staff</span><span class="pull-right online-counter">3 Online</span></h3>
            <ul class="chat-user-list">
            </ul>
            
            @foreach (Auth::user()->cohorts as $cohort)
              <h3 class="clearfix">
              <span class="pull-left">{{$cohort->name}}</span>
              <span class="pull-right online-counter">1 Online</span></h3>
            
              <ul class="chat-user-list">
                @foreach ($cohort->ideas as $project)
                  @foreach ($project->team->users as $member)
                    @include('includes.sidebar-right.user')
                  @endforeach
                @endforeach
              </ul>
            @endforeach
        </div>
      </div>
        
        
<div role="tabpanel" class="tab-pane" id="activities">
    <div class="activities-timeline">
        <h3 class="tab-pane-header">Recent Activities</h3>
        <ul class="activities-list">
            <li>
                <div class="activities-badge">
                    <span class="w_bg_amber"><i class="zmdi zmdi-ticket-star"></i></span>
                </div>
                <div class="activities-details">
                    <h3 class="activities-header"><a href="#">Resolved Tickets #LTK7865</a></h3>
                    <div class="activities-meta">
                        <i class="fa fa-clock-o"></i> 30 min ago
                    </div>
                </div>
            </li>
            <li>
                <div class="activities-badge">
                    <span class="w_bg_cyan"><i class="zmdi zmdi-file-plus"></i></span>
                </div>
                <div class="activities-details">
                    <h3 class="activities-header"><a href="#">Files Uploaded</a></h3>
                    <div class="activities-meta">
                        <i class="fa fa-clock-o"></i> 1 hour ago
                    </div>
                    <div class="activities-post">
                        <ul class="new-file-lists">
                            <li><a href="#"><i class="fa fa-file-text"></i> change-log.txt</a></li>
                            <li><a href="#"><i class="fa fa-file-audio-o"></i> skype-conversation.mp3</a></li>
                            <li><a href="#"><i class="fa fa-file-powerpoint-o"></i> presentation.ppt</a></li>
                            <li><a href="#"><i class="fa fa-file-video-o"></i> howtouse.avi</a></li>
                            <li><a href="#"><i class="fa fa-file-image-o"></i> screenshot.jpg</a></li>
                            <li><a href="#"><i class="fa fa-file-word-o"></i> nda.doc</a></li>
                            <li><a href="#"><i class="fa fa-file-pdf-o"></i> resume.pdf</a></li>
                            <li><a href="#"><i class="fa fa-file-archive-o"></i> all-files.zip</a></li>
                            <li><a href="#"><i class="fa fa-file-excel-o"></i> bill.xls</a></li>
                            <li><a href="#">+10</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="activities-badge">
                    <span class="w_bg_light_blue"><i class="zmdi zmdi-image"></i></span>
                </div>
                <div class="activities-details">
                    <h3 class="activities-header"><a href="#">Images Uploaded</a></h3>
                    <div class="activities-meta">
                        <i class="fa fa-clock-o"></i> July 22 at 1:12pm
                    </div>
                    <div class="activities-post">
                        <ul class="new-image-lists">
                            <li><a href="#"><img src="images/img-1-thumb.jpg" alt="image"></a></li>
                            <li><a href="#"><img src="images/img-2-thumb.jpg" alt="image"></a></li>
                            <li><a href="#"><img src="images/img-3-thumb.jpg" alt="image"></a></li>
                            <li><a href="#" class="more-list"><i class="zmdi zmdi-more-horiz"></i></a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="activities-badge">
                    <span class="w_bg_green"><i class="zmdi zmdi-accounts-alt"></i></span>
                </div>
                <div class="activities-details">
                    <h3 class="activities-header"><a href="#">Users Approved</a></h3>
                    <div class="activities-meta">
                        <i class="fa fa-clock-o"></i> July 22 at 1:12pm
                    </div>
                    <div class="activities-post">
                        <ul class="new-user-lists">
                            <li><a href="#"><img src="images/avatar/oykun.jpg" alt="image"></a></li>
                            <li><a href="#"><img src="images/avatar/mds.jpg" alt="image"></a></li>
                            <li><a href="#"><img src="images/avatar/robertoortiz.jpg" alt="image"></a></li>
                            <li><a href="#" class="more-list"><i class="zmdi zmdi-more-horiz"></i></a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="activities-badge">
                    <span class="w_bg_deep_purple"><i class="zmdi zmdi-file-text"></i></span>
                </div>
                <div class="activities-details">
                    <h3 class="activities-header"><a href="#">Post New Article</a></h3>
                    <div class="activities-meta">
                        <i class="fa fa-clock-o"></i> July 22 at 1:12pm
                    </div>
                    <div class="activities-post">
                        <ul class="new-post-lists">
                            <li><a href="#">Man in the Verde Valley</a></li>
                            <li><a href="#">Sinagua Pueblo Life</a></li>
                            <li><a href="#">Montezuma Well</a></li>
                            <li><a href="#">The Natural Scene</a></li>
                            <li><a href="#">+6</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="activities-badge">
                    <span class="w_bg_teal"><i class="zmdi zmdi-comments"></i></span>
                </div>
                <div class="activities-details">
                    <h3 class="activities-header"><a href="#">Comments Replied</a></h3>
                    <div class="activities-meta">
                        <i class="fa fa-clock-o"></i> July 22 at 1:12pm
                    </div>
                    <div class="activities-post">
                        <ul class="new-comments-lists">
                            <li><a href="#">As long as you are reasonably careful about where you step and avoid putting ...</a></li>
                            <li><a href="#">Montezuma Castle is 5 miles north of Camp Verde, 60 miles south...</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
</div>
</div>
</aside>