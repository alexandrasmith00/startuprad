  <script>
      
    function init() {
        
        // autosize the input area on typing
        autosize($('textarea'));
        
        // submit on enter
        $('#comment-box textarea').keydown(function(e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                makeComment($(this.form).serialize());
            }
        });
        
        $('#click-post').click(function(e) {
            e.preventDefault();
            makeComment($(this.form).serialize());
        });
        
        // submit on enter
        $('#big-comment-box textarea').keydown(function(e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                makeComment($(this.form).serialize());
                $('#big-comment-box textarea').val('').attr("Placeholder", 'Adding your thought... ');
            }
        });

        // show reply form
        $('.reply-link').click(function() { 
            $('[id*="reply-"]').hide();

            var reply_to = $(this).attr("id");
            var found = "reply-" + reply_to;
            $('#' + found).show();
        });
    }
      
    function showReply(button) {
        $('[id*="reply-"]').hide();
        var reply_to = $(button).attr("id");
        var found = "reply-" + reply_to;
        $('#' + found).show();
        
    }
      
    function makeComment(data) {

      // Build POST data and make AJAX request
      $.post('/reply', data).success(commentSuccess);

      // Ensure the normal browser event doesn't take place
      return false;
    }
      
    function commentSuccess(data) {
        $('[id*="reply-"]').hide();
        $('[id*="reply-"]').find('textarea').val('');
        showComment(data);
        $('#big-comment-box textarea').val('').attr("Placeholder", 'Add another thought');

    }
      
    function showComment(data) {

        var message = data[0];
        var user = data[1];
        var new_c = data[2];
        
        // add information to comment 
        var el = createCommentEl();
        var offset = "col-xs-offset-" + message['depth'];
        $('#' + message['comment-id'] + '-show').append(el);

        el.find('#new-comment-content').text(message['message']);
        el.find('#new-comment-name').text(user['name']);
        el.addClass(offset);
        el.find('#reply-link').attr('id', data[2]['id']);
        
        // add information to hidden new reply
        var reply_el = createReplyEl();
        var offset = parseInt(message['depth']) + 1;
        var reply_offset = "col-xs-offset-" + offset;
        
        $('#' + message['comment-id'] + '-show').after(reply_el);
        
        var change = $('#new-reply');
        var change_2 =  $('#add-comment-id')
        
        change.attr('id', "reply-" + new_c['id']);
        change_2.attr('id', "comment-" + new_c['id'] + '-show');
        change.addClass(reply_offset);
        reply_el.find('input[name="comment-id"]').val("comment-" + new_c['id']);
        reply_el.find('input[name="depth"]').val(reply_offset);

    }

      
    function createCommentEl() {
        var text = $('#add-the-comment').text();
        var el = $(text);
        return el;
    }    

      
    function createReplyEl() {
        var text = $('#add-the-reply-form').text();
        var el = $(text);
        return el;
    }    


      
    $(init);

</script>