
    <script>
        function notifyInit() {
          // set up form submission handling
          $('#notify_form').submit(notifySubmit);
        }

        // Handle the form submission
        function notifySubmit() {
          var notifyText = $('#notify_text').val();
          if(notifyText.length < 3) {
            return;
          }

          // Build POST data and make AJAX request
          var data = {notify_text: notifyText};
          $.post('/notifications/notify', data).success(notifySuccess);

          // Ensure the normal browser event doesn't take place
          return false;
        }

        // Handle the success callback
        function notifySuccess() {
          console.log('notification submitted');
        }

        $(notifyInit);
        
        // Use toastr to show the notification
        function showNotification(data) {
            
            if (data.user.id == {{ Auth::user()->id }} )
                toastr.success('Message sent.', null, {"positionClass": "toast-bottom-left"});
            else {
                toastr.success(data.user.name + ' says: ' + data.message.body , 'New Message', {"positionClass": "toast-bottom-left"});
            }
            
            
        }
        

    </script>