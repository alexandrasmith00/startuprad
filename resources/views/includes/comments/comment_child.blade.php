<div class="recent-comments col-xs-offset-{{ $comment->depth }}">
    <div class="recent-comment-meta">
        <div class="comment-user-thumb">
            <a href="#"><img src="{{asset('images/avatar/oykun.jpg')}}" alt="user"></a>
        </div>
        <div class="comment-user-info">
            <ul>
                <li class="name">
                    <a class="subtle" href="#">{{ $comment->user->name }}</a>
                    {{ $comment->body }}
                </li>
                <li class="comment-info">
                    <span class="p-time"><i class="fa fa-clock-o"></i>  {{ $comment->created_at->diffForHumans() }}</span>

                    @if ( Auth::user()->idea_id == $post->user->idea['id'] )
                        &nbsp; &middot; &nbsp;
                        <span class="p-time"><a id="{{ $comment->id }}" class="thank-comment action-link">Thank</a></span>
                    @endif

                    &nbsp; &middot; &nbsp;
                    <span class="p-time"> <a id="{{ $comment->id }}"class="action-link reply-link">Reply</a></span>

                </li>
            </ul>
        </div>
    </div>
</div>

@if($comment->hasChildren())
    @foreach($comment->getChildren() as $child)
        @include('includes.comments.comment_child', ['comment' => $child])
    @endforeach
@endif

@include('includes.comments.make_reply')

