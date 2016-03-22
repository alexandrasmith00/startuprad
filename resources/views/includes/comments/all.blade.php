@if($post->comments()->count() > 0)
    <div class="widget-container margin-top-0">
        <div class="widget-content">
            <div class="recent-comments-list">
                @foreach($post->comments as $comment)
                    @include('includes.comments.comment')
                @endforeach
                
                <button class="btn btn-link btn-block btn-loadmore"><i class="zmdi zmdi-comment-alt-text"></i> &nbsp;Comment</button>

            </div>
        </div>
    </div>
@endif