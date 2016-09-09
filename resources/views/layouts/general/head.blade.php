<!-- Meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- SEO help -->
<meta name="description" content="Startup RAD">
<meta name="keywords" content="startups,education,feedback,learning,experiential">


<title>{{ isset($title) ? $title . ' - RAD' : 'Startup RAD' }}</title>

<!-- Google Fonts -->
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500|Montserrat:400,700' rel='stylesheet' type='text/css'>

<!-- Page specific styles, if any -->
@yield('stylesheets')
