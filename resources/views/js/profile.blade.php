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
        $("#edit-field").attr("value", current_value);
        $('#update-label').text("Your " + update);
        $('.update-field').attr("name", update);
    }
      
    function updateField() {
        var update = $(this).attr("name"); 
        var new_val = $("#edit-field").val();
        
        var data = {field: update, new_val: new_val, id: {{ $project->id }}   };
        $.post('/project/update', data).success(notifySuccess);


        console.log(new_val);
    }
      
    function sendMessage() {
        
         // Build POST data and make AJAX request
        var data = {something: 'hey there', id: {{ $project->id }}  };
        $.post('/project/add', data).success(notifySuccess);

        // Ensure the normal browser event doesn't take place
        return false;
    }
      
    function notifySuccess() {
        console.log('something was updated');
    }
      
    function checkingNow() {
        alert('something has changed');   
    }
      
    $(init);

</script>