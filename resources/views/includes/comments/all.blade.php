<div class="widget-container margin-top-0">
    <div class="widget-content">
        <div class="recent-comments-list">
            @if($post->comments()->count() > 0)
                @foreach($post->comments as $comment)
                    @include('includes.comments.comment')
                @endforeach
            @endif

            <div id="post-{{ $post->id }}-show"></div>

            @include('includes.comments.make', ['action' => 'Comment'])

        </div>
    </div>
</div>



@section('scripts')
    @parent

    <script id="add-the-comment" type="text/template">
        <div id="add-offset" class="recent-comments">
            <div class="recent-comment-meta">
                <div class="comment-user-thumb">
                    <a href="#"><img src="{{asset('images/avatar/oykun.jpg')}}" alt="user"></a>
                </div>
                <div class="comment-user-info">
                    <ul>
                        <li class="name">
                            <a href="#"><span id="new-comment-name"></span></a>
                            <span id="new-comment-content"></span>
                        </li>
                        <li class="comment-info">
                            <i class="fa fa-clock-o"></i> Just Now
                            &nbsp; &middot; &nbsp;
                            <a id="reply-link" class="action-link reply-link">Reply</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </script>

    <script id="add-the-reply-form" type="text/template">

        <div id="add-comment-id"></div>

        <div style="display: none;"  id="new-reply" class="recent-comments ">
            <div class="recent-comment-meta">
                <div class="comment-user-thumb">
                    <a href="#"><img src="{{asset('images/avatar/oykun.jpg')}}" alt="user"></a>
                </div>
                <div class="comment-user-info">
                    <ul>
                        <li class="u-name">
                            <form id="comment-box" action="/reply" method="post">
                                <input type="hidden" name="comment-id">
                                <input type="hidden" name="depth">

                                <textarea spellcheck="false" style="resize: none;" rows="1" name="message" class="form-control comment" placeholder="Write your reply..."></textarea>
                            </form>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </script>

@stop
