<div class="widget-wrap">
    <div class="widget-header block-header margin-bottom-0 clearfix">
        <div class="pull-left">
          <div class="recent-users-list">
            <div class="user-intro">
                <div class="user-thumb"><a href="/project/{{ $post->idea->id }}"><img src="{{{ $post->idea->logo  != "" ? $post->idea->logo : asset('images/avatar/amarkdalen.jpg')  }}}" alt="user"></a></div>
                <div class="users-info">           
                    <ul>               
                        @if ($post->type == 'chat')
                            <li class="u-name"><a href="/project/{{ $post->user->idea['id'] }}">{{ $post->user->name }}</a> <small class="text-muted"> <i style="color: #17bab8;"class="zmdi zmdi-chevron-right"></i></small> <a href="/project/{{ $post->idea->id }}">{{ $post->idea->name }}</a></li>
                        @elseif ($post->type == 'question')
                            <li class="u-name"><a href="/project/{{ $post->user->idea['id'] }}">{{ $post->user->idea['name'] }}</a></li>
                        @else
                          <li class="u-name"><a href="/project/{{ $post->user->idea['id'] }}">{{ $post->user->idea['name'] }}</a><small class="text-muted"> {{ $post->title }}</small></li>
                        @endif
                        
                        <li class="u-location"> <i class="zmdi zmdi-time"></i> {{ $post->created_at->diffForHumans() }}</li>
                    </ul>
                </div>
            </div>
              
            <div class="user-intro">
                <div class="post-body">
                    {{ $post->content }}
                </div>
                <div class="post-tags">
                    
                    @if ($post->tags->count() > 0)
                        @foreach ($post->tags as $tag)
                            <label class="label label-primary label-tag">#{{ $tag->name }} </label> 
                        @endforeach
                    @endif
                    
                </div>

            </div>

          </div>
        </div>
    </div>
        
    @include('includes.comments.all')    

</div>
