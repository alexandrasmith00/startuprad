  <script>
      
    function init() {
        
        // autosize the input area on typing
        autosize($('textarea'));
        
        // submit on enter
        $('#post-box textarea').keydown(function(e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                makePost($(this.form).serialize());
            }
        });
        
        $("#post-button").click(function(e){
            e.preventDefault();
            makePost($(this.form).serialize());
        }); 
    }
      

      
    function makePost(data) {
        
      // Build POST data and make AJAX request
      $.post('/post', data).success(postSuccess);

      // Ensure the normal browser event doesn't take place
      return false;
    }

    
    function postSuccess(data) {
        
        alert('successful');
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