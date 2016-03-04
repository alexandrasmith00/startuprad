@extends('layouts.app')

@section('stylesheets')

@stop

@section('content')


  <div class="row">
      
      
    <div class="col-md-6 col-md-offset-3">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class='box-header with-border'>
              <div class='user-block'>
                <img class='img-circle' src='../dist/img/user1-128x128.jpg' alt='user image'>
                    
                <span class='username'><a href="#">{{ Auth::user()->name }}  </a> <small>{{ Auth::user()->idea->name }}  </small></span>
                <span class='description'><em>Now</em></span>
              </div><!-- /.user-block -->
              <div class='box-tools'>
                <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
                <button class='btn btn-box-tool' data-widget='remove'><i class='fa fa-times'></i></button>
              </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class='box-body'>
<!--              <img class="img-responsive pad" src="../dist/img/photo2.png" alt="Photo">-->
              <p>                  <input id="responsive-post" type="text" class="form-control input-sm" placeholder="Ask a question, share something interesting, or update your profile">
</p>
<!--              <button class='btn btn-default btn-xs'><i class='fa fa-share'></i> Share</button>-->
            </div><!-- /.box-body -->

          </div><!-- /.box -->
        </div><!-- /.col -->
      
      @if($posts->count() > 0)
        @foreach ($posts as $post)

        <div class="col-md-6 col-md-offset-3">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class='box-header with-border'>
              <div class='user-block'>
                <img class='img-circle' src='../dist/img/user1-128x128.jpg' alt='user image'>
                    
                <span class='username'><a href="#">{{ $post->user->name }}</a> 
                    @if ( $post->user->idea )
                        <small>{{ $post->user->idea->name }}</small>
                    @endif
                </span>
                <span class='description'><em>{{ $post->created_at->diffForHumans() }}</em></span>
              </div><!-- /.user-block -->
              <div class='box-tools'>
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
    @endif
    </div>
<!--        {!! $posts->render() !!}-->


@stop

@section('scripts')

@stop