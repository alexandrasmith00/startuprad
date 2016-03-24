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
        var el = createCommentEl();
        var message = data[0];
        var user = data[1];
        var offset = "col-xs-offset-" + message['depth'];
        $('#' + message['comment-id'] + '-show').append(el);
        
        el.find('#new-comment-content').text(message['message']);
        el.find('#new-comment-name').text(user['name']);
        el.addClass(offset);
    }
      
    function createCommentEl() {
        var text = $('#add-the-comment').text();
        var el = $(text);
        return el;
    }    


      
    $(init);

</script>