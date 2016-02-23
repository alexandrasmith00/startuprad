  <script>
      
    function init() {
        // send button click handling
        $('.editable').click(showEditModal);
        $('.update-field').click(updateField);
        $('#edit-field').keypress(checkSend);
    }
      
    // Send on enter/return key
    function checkSend(e) {
        if (e.keyCode === 13) {
            return updateField();
        }
    }

    function showEditModal() {

        var update = $(this).attr("name");
        var current_value = $("#" + update ).text();
        
        $('#edit-modal').modal('show');
        $('#edit-modal-title').text("Edit your " + update);
        

        $('#update-label').text("Your " + update);
        $("#edit-field").val(current_value);
        $("#edit-field").focus().select();

        $('.update-field').val(update);
        
        
    }
      
    function updateField() {
        var update = $('.update-field').val();
        var new_val = $("#edit-field").val();
        
        // needs some sort of verification that field has actually changed
        
        var data = {field: update, new_val: new_val, id: {{ $project->id }} };
        $.post('/project/update', data).success(notifySuccess);

    }
      
    function sendMessage() {
        
         // Build POST data and make AJAX request
        var data = {something: 'hey there', id: {{ $project->id }}  };
        $.post('/project/add', data).success(notifySuccess);

        // Ensure the normal browser event doesn't take place
        return false;
    }
      
    function notifySuccess() {
        // close modal
        $('#edit-modal').modal('hide');
    }
      
    function updateDisplay(data) {
        $('#' + data.field).text(data.new_val);
    }
      
    $(init);

</script>