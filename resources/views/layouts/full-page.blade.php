<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
    

<body>
    
        @include('includes.header')

        <div class="full-page-content">
            @yield('content')
        </div>

        @include('includes.scripts')
</body>
</html>



    