
    <div class="widget-container margin-top-0">
        <div class="widget-content">
            <div class="recent-comments-list">
                @if($post->comments()->count() > 0)
                    @foreach($post->comments as $comment)
                        @include('includes.comments.comment')
                    @endforeach
                @endif
                <button class="btn btn-link btn-block btn-loadmore"><i class="zmdi zmdi-comment-alt-text"></i> &nbsp;Comment</button>
            </div>
        </div>
    </div>
