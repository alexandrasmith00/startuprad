<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<title>RAD</title>

<!-- Fonts -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps' rel='stylesheet' type='text/css'>

<!-- Universal Styles -->
<link rel="stylesheet" type="text/css" href="/css/app.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


<!-- Page-Specific Styles -->
<?php echo $__env->yieldContent('stylesheets'); ?>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdn.rawgit.com/samsonjs/strftime/master/strftime-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="//js.pusher.com/3.0/pusher.min.js"></script>

<script type="text/javascript">
    // Ensure CSRF token is sent with AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }); 
</script>