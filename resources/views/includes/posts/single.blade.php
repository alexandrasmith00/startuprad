<div class="widget-wrap">
    <div class="widget-header block-header margin-bottom-0 clearfix">
        <div class="pull-left">
          <div class="recent-users-list">
            <div class="user-intro">
                <div class="user-thumb"><a href="/project/{{ $post->idea->id }}"><img style="width: auto; border-radius: 0; padding-right: 15px;" src="{{{ $post->idea->logo  != "" ? $post->idea->logo : asset('images/avatar/amarkdalen.jpg')  }}}" alt="user"></a></div>
                <div class="users-info">
                    <ul>
                        @if ($post->type == 'chat')
                          <li class="name"><a href="/project/{{ $post->user->idea['id'] }}">{{ $post->user->name }}</a> <small class="text-muted emphasized"> <i class="zmdi zmdi-chevron-right"></i></small> <a href="/project/{{ $post->idea->id }}">{{ $post->idea->name }}</a></li>
                        @elseif ($post->type == 'question')
                          <li class="name"><a href="/project/{{ $post->user->idea['id'] }}">{{ $post->user->idea['name'] }}</a></li>
                        @else
                          <li class="name"><a href="/project/{{ $post->user->idea['id'] }}">{{ $post->user->idea['name'] }}</a><small class="text-muted"> {{ $post->title }}</small></li>
                        @endif

                        <li class="u-location"> <i class="zmdi zmdi-time"></i> {{ $post->created_at->diffForHumans() }}</li>
                    </ul>
                </div>
            </div>

            <div class="user-intro">
                @if (strstr($post->content, "\n"))
                    <div class="post-body" style="white-space:pre;">{{ $post->content }}</div>
                @else
                    <div class="post-body">{{ $post->content }}</div>
                @endif

                <div class="post-tags">

                    @if ($post->tags->count() > 0)
                        @foreach ($post->tags as $tag)
                            <label class="label label-tag">#{{ $tag->name }} </label>
                        @endforeach
                    @endif

                </div>

            </div>

          </div>
        </div>
    </div>

    @include('includes.comments.all')

</div>
