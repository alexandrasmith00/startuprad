<div class="recent-comments">
    <div class="recent-comment-meta">
        <div class="comment-user-thumb">
            <a href="#"><img src="images/avatar/oykun.jpg" alt="user"></a>
        </div>
        <div class="comment-user-info">
            <ul>
                <li class="u-name">
                    <a style="color:#17bab8;" href="#"><b>{{ $comment->user->name }}</b></a> 
                    {{ $comment->body }} 
                </li>
                <li class="comment-info">
                    <span class="p-time"><i class="zmdi zmdi-time"></i>  {{ $comment->created_at->diffForHumans() }}</span>
<!--
                    &nbsp; &middot; &nbsp;
                    <span class="p-time"> Thank</span>
-->
                    &nbsp; &middot; &nbsp;
                    <span class="p-time"> <a class="action-link">Reply</a></span>
                </li>
                
            </ul>
        </div>
<!--        <span class="comments-reply"><a href="#"><i class="zmdi zmdi-mail-reply"></i></a></span>-->
    </div>

</div>
                
     
