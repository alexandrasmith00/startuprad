  <script>
      
    function init() {
        // send button click handling
        $('.say-hi').click(sendMessage);
        $('.input-message').keypress(checkSend);
    }
      
    function sendMessage() {
        alert('saying hi!');   
    }
      
    $(init);

</script>