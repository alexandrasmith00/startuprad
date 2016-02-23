<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
    

<body id="sidebar-layout">
    
    @include('includes.navbar')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                @include('includes.sidebar')
            </div>
            
            <div class="col-sm-9 col-md-10 content-portion">
                @yield('content')
            </div>
        </div>
    </div>
    
    
    @include('includes.footer')

    @include('includes.scripts')
    
</body>
</html>



    