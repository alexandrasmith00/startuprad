  <script>
      
    function init() {
        // send button click handling
        $('.editable').click(showEdit);
        $('.update-field').click(updateField);
        $('#edit-field').keypress(checkSend);
    }
      
    // Send on enter/return key
    function checkSend(e) {
        if (e.keyCode === 13) {
            return updateField();
        }
    }
      
    function showEdit() {
        

        createModal(createEl(this.id));
        autosize($('textarea'));
        
        $('#edit-name').attr('placeholder', $('#set-name').text());
        $('#edit-tagline').attr('placeholder', $('#set-tagline').text());

        $('#edit-site').attr('placeholder', $('#set-site').text());
        $('#edit-email').attr('placeholder', $('#set-email').text());
        $('#edit-facebook').attr('placeholder', $('#set-facebook').text());
        $('#edit-linkedin').attr('placeholder', $('#set-linkedin').text());
        $('#edit-twitter').attr('placeholder', $('#set-twitter').text());

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
        
        var data = {field: update, new_val: new_val, id: <?php echo e($project->id); ?> };
        $.post('/project/update', data).success(notifySuccess);

    }
      
    function sendMessage() {
        
         // Build POST data and make AJAX request
        var data = {something: 'hey there', id: <?php echo e($project->id); ?>  };
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
      
      
      
    function createModal(form) {
        bootbox.dialog({
            title: "Update the overview",
            message: form,
            buttons: {
                success: {
                    label: "Update",
                    className: "btn-primary",
                    callback: function () {
                        var name = $('#name').val();
                        var answer = $("input[name='awesomeness']:checked").val()
                        DemoCallBack.show("Hello " + name + ". You've chosen <b>" + answer + "</b>");
                    }
                }
            }
        });
    }
      
      function createEl(name) {
        var add = '#edit-' + name + '-form';
        var text = $(add).text();
        var el = $(text);
        return el;
      }
    $(init);

</script>