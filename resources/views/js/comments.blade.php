  <script>
      
    function init() {
        // send button click handling
        $('.say-hi').click(sendMessage);
    }
      
    function sendMessage() {
        alert('going to make a post call!');   
        
         // Build POST data and make AJAX request
        var data = {notify_text: notifyText};
        $.post('/notifications/notify', data).success(notifySuccess);

    }
      
    $(init);

</script>