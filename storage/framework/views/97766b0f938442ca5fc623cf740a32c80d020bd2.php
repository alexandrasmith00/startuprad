  <script>
      
    function profile_init() {
        // send button click handling
        $('.editable').click(showEdit);
    }
      
    // Send on enter/return key
    function checkSend(e) {
        if (e.keyCode === 13) {
            return updateField();
        }
    }
      
    function showEdit() {
        createModal((this.id).split("-")[0], createEl(this.id));
        autosize($('textarea'));
        
        var inner = '#' + this.id + "-add-to-form";
        var inner_text = $(inner).text();
        
        $('#form-here').append(inner_text);
    }
     
    function createModal(name, form) {
        bootbox.dialog({
            title: "Update " + name,
            message: form,
            buttons: {
                success: {
                    label: "Update",
                    className: "btn-primary",
                    callback: function () {
                        $('#form-here').submit();
//                        createUpdateModal('Would you like to post this update?', $('#post-update').text(), $('#form-here'));
                    }
                }
            }
        });
    }
      
    function createUpdateModal(title, form, action) {
        bootbox.dialog({
            title: title,
            message: form,
            buttons: {
                "Skip": {
                  className: "btn-default",
                  callback: function() {
                    action.submit();
                  }
                },
                success: {
                    label: "Post",
                    className: "btn-primary",
                    callback: function () {
                        $('#ask').val('yes');
                        $('#ask-field').val($('#ask-something').val());
                        action.submit();
                    }    
                }

            }
        });
    }
      
      function createEl(name) {
        var text = $('#edit-form').text();
        var el = $(text);
        return el;
      }
      
      
    $(profile_init);

</script>
