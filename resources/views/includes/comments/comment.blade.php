<!--
<div class="panel panel-default">
    <div class="panel-body">
        <p></p>

        <small><b>{{ $comment->user_name }}</b> - </small>
    </div>
    <div class="panel-footer">
        <a class="btn btn-default reply-link" data-url="{{ route('comments.reply', [$comment->id]) }}">Reply</a>
    </div>
</div>
-->

<div class='box-comment'>
    <!-- User image -->
    <img class='img-circle img-sm' src='../dist/img/user3-128x128.jpg' alt='user image'>
    <div class='comment-text'>
      <span class="username">
        {{ $comment->user->name }}  <small><a>Like </a> <a>Reply </a></small>
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



