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
        var id_split = (this.id).split(" ");
        
        if (id_split.length > 1)
            $('#resource_id').val(id_split[1]);
        
        var id =id_split[0];
        createModal(id, createEl(this.id));
        autosize($('textarea'));
        
        var inner = '#' + id + "-add-to-form";
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