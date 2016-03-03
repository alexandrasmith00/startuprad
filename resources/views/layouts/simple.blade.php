<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
    

<body>
    

    <div id="wrapper">

        @include('includes.sidebar')
        
        @yield('content')

        <!-- /#sidebar-wrapper -->

 

    </div>
    
            
        @include('includes.scripts')


</body>
</html>



    