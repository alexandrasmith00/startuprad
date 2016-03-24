<div id="comment-{{ $comment->id }}-show"></div>

<div style="display: none;" id="reply-{{ $comment->id }}" class="recent-comments col-xs-offset-{{ $comment->depth + 1 }}">
    <div class="recent-comment-meta">
        <div class="comment-user-thumb">
            <a href="#"><img src="{{asset('images/avatar/oykun.jpg')}}" alt="user"></a>
        </div>
        <div class="comment-user-info">
            <ul>
                <li class="u-name">
                    <form id="comment-box" action="/reply" method="post">
                        <input type="hidden" name="comment-id" value="comment-{{ $comment->id }}">
                        <input type="hidden" name="depth" value="{{ $comment->depth + 1 }}">

                        <textarea spellcheck="false" style="resize: none;" rows="1" name="message" class="form-control comment" placeholder="Write your reply..."></textarea>
                    </form>
                </li>

            </ul>
        </div>
    </div>
</div>

