<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
    

<body class="overlay-leftbar">
    @include('includes.header')

    @yield('content')
    
    @include('includes.scripts')
</body>
</html>


