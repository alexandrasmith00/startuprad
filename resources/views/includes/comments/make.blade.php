<form id="big-comment-box" action="/reply" method="post"  data-parsley-validate data-parsley-errors-messages-disabled>
    <input type="hidden" name="comment-id" value="post-{{ $post->id }}">

    <textarea data-parsley-required spellcheck="false" style="resize: none;" name="message" class="form-control comment" placeholder="Add a thought..."></textarea>
<button id="click-post" class="btn btn-link btn-block btn-loadmore" style="padding: 6px 12px;"><i class="zmdi zmdi-comment-alt-text"></i> &nbsp;{{ $action }}</button>
</form>
