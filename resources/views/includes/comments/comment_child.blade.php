<div class="box-comment col-xs-offset-{{ $comment->depth }}">
    <!-- User image -->
    <img class='img-circle img-sm' src='../dist/img/user3-128x128.jpg' alt='user image'>
    <div class='comment-text'>
      <span class="username">
        {{ $comment->user->name }} <small><a>Like </a> <a>Reply </a></small>
        <span class='text-muted pull-right'>{{ $comment->created_at->diffForHumans() }}</span>
      </span><!-- /.username -->
      {{ $comment->body }}
    </div><!-- /.comment-text -->
</div><!-- /.box-comment -->

@if($comment->hasChildren())
    @foreach($comment->getChildren() as $child)
        @include('includes.comments.comment_child', ['comment' => $child])
    @endforeach
@endif
