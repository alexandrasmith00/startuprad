<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
    

<body>
    
        @include('includes.header')

        <div class="page-content">
            @yield('content')
        </div>

        @include('includes.footer')
    
            
        @include('includes.scripts')


</body>
</html>



    