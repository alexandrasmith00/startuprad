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

