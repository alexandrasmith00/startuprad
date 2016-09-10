<div class="recent-comments">
    <div class="recent-comment-meta">
        <div class="comment-user-thumb">
          <a href="#"><img src="{{asset('images/avatar/oykun.jpg')}}"></a>
        </div>
        <div class="comment-user-info">
            <ul>
                <li class="name">
                    <a href="#">{{ $comment->user->name }}</a>
                    {{ $comment->body }}
                </li>
                <li class="comment-info">
                    <i class="zmdi zmdi-time"></i>
                    {{ $comment->created_at->diffForHumans() }}

                    @if ( Auth::user()->idea_id == $post->user->idea['id'] )
                        &nbsp; &middot; &nbsp;
                        <a id="{{ $comment->id }}" class="thank-comment">Thank</a>
                    @endif

                    &nbsp; &middot; &nbsp;
                    <a id="{{ $comment->id }}" class="reply-link">Reply</a>
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





