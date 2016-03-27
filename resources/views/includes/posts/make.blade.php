<div class="widget-wrap" style="padding-top: 0px;">
<div class="widget-container margin-top-0">
    <div class="widget-content">
        <div class="recent-comments-list">
                    
            <form action="" method="post">
                <input type="hidden" name="comment-id" value="post-1">
                <textarea spellcheck="false" style="resize: none; overflow: hidden; word-wrap: break-word; height: 62px;" name="message" class="form-control comment" placeholder="{{ $placeholder }}"></textarea>
                <input type="text" id="little-tags" class="tags tags-input" data-type="highlighted-tags" data-highlight-color="#e6e39c" value="#RADNOW"/>
                <button class="btn btn-link btn-block btn-loadmore" style="padding: 6px 12px; text-transform: capitalize;">{{ $button }}</button>

            </form>

        </div>
    </div>
</div>
</div>

@section('scripts')
@parent

<script  src="{{asset('js/lib/jquery.tagsinput.js')}}"></script>


<script>
// Initialize Code
if ($.fn.tagsInput) {ut.

    $('.tags-input').each(function() {
        var tagsType = $(this).data('type')
        var highlightColor = $(this).data('highlight-color')
        if (tagsType === 'tags') {
            $(this).tagsInput({
                width: 'auto'
            });
        }
        if (tagsType === 'highlighted-tags') {
            $(this).tagsInput({
                width: 'auto',
                onChange: function(elem, elem_tags) {
                    var actions = ['#update', '#ask', '#share'];
                    $('.tag', elem_tags).each(function() {
                        if ($(this).text().search(new RegExp('\\b(' + actions.join('|') + ')\\b')) >= 0) $(this).css('background-color', highlightColor);
                    });
                    var fields = ['#name', '#team', '#tagline', '#site', '#logo', '#description', '#market', '#product', '#organization', '#slidedeck', '#pitch'  ];
                    $('.tag', elem_tags).each(function() {
                        if ($(this).text().search(new RegExp('\\b(' + fields.join('|') + ')\\b')) >= 0) $(this).css('background-color', highlightColor);
                    });
                    
                }
            });
        }
    });
}
    
    

</script>
@stop