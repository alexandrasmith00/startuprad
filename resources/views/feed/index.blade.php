@extends('layouts.app')

@section('content')


  <div class="row">
      
        @foreach ($posts as $post)

        <div class="col-md-6 col-md-offset-3">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class='box-header with-border'>
              <div class='user-block'>
                <img class='img-circle' src='../dist/img/user1-128x128.jpg' alt='user image'>
                    
                <span class='username'><a href="#">{{ $post->user->name }}</a> <small>{{ $post->user->idea->name }}</small></span>
                <span class='description'><em>{{ $post->published_at->diffForHumans() }}</em></span>
              </div><!-- /.user-block -->
              <div class='box-tools'>
                <button class='btn btn-box-tool' data-toggle='tooltip' title='Mark as read'><i class='fa fa-circle-o'></i></button>
                <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
                <button class='btn btn-box-tool' data-widget='remove'><i class='fa fa-times'></i></button>
              </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class='box-body'>
<!--              <img class="img-responsive pad" src="../dist/img/photo2.png" alt="Photo">-->
              <p>{{ $post->content }}</p>
<!--              <button class='btn btn-default btn-xs'><i class='fa fa-share'></i> Share</button>-->
              <button class='btn btn-default btn-xs'><i class='fa fa-thumbs-o-up'></i> Like</button>
              <span class='pull-right text-muted'>127 likes - {{ $post->comments->count() }} comments</span>
            </div><!-- /.box-body -->
            <div class='box-footer box-comments'>
                
                    @if($post->comments()->count() > 0)
                        @foreach($post->comments as $comment)
                            @include('includes.comments.comment')
                        @endforeach
                    @else
                        <p>Pas de commentaire</p>
                    @endif
                
            </div><!-- /.box-footer -->
            <div class="box-footer">
              <form action="#" method="post">
                <img class="img-responsive img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="alt text">
                <!-- .img-push is used to add margin to elements next to floating images -->
                <div class="img-push">
                  <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                </div>
              </form>
            </div><!-- /.box-footer -->
          </div><!-- /.box -->
        </div><!-- /.col -->
      
      @endforeach
    </div>
<!--        {!! $posts->render() !!}-->


@stop