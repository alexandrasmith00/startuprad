<div style="background: #0D74FE; color: white;" class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Hi everyone!</strong> Just so you know, the return key no longer submits a post.  You can use it for spacing in your posts now.
</div>

<div class="widget-wrap" style="padding-top: 0px;">
<div class="widget-container margin-top-0">
    <div class="widget-content">
        <div class="recent-comments-list">

            <form id="post-box" action="" method="post" data-parsley-validate>
                <input name="_method" type="hidden" value="POST">
                <input type="hidden" name="user-id" value="{{ Auth::user()->id}}">
                @if ($isYours)
                  <input type="hidden" name="idea-id" value="{{ Auth::user()->idea->id}}">
                  <input type="hidden" name="type" value="question">
                @else
                  <input type="hidden" name="idea-id" value="{{ $project->id }}">
                  <input type="hidden" name="type" value="chat">
                @endif

                <textarea data-parsley-required id="make-post-textarea" spellcheck="false" style="resize: none; overflow: hidden; word-wrap: break-word; height: 62px;" name="content" class="form-control comment" placeholder="{{ $placeholder }}"></textarea>
                <input name="tags" type="text" id="little-tags" class="tags tags-input" data-type="highlighted-tags" data-highlight-color="#e6e39c" value="#RADNOW"/>
                <button id="post-button" class="btn btn-link btn-block btn-loadmore" style="padding: 6px 12px; text-transform: capitalize;">{{ $button }}</button>

            </form>


        </div>
    </div>
</div>
</div>

@section('scripts')

    @parent

    @include('js.post')
    @include('templates.new-post')

    <script  src="{{asset('js/lib/jquery.tagsinput.js')}}"></script>

@stop
