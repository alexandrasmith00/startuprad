<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    
    <div id="main">
        
        <header class="row">
            @include('includes.header')
        </header>

        <div class="container">
            @yield('content')
        </div>
    
    </div>

    
    <footer class="row">
        @include('includes.footer')
    </footer>
    
    @yield('scripts')
    
</body>
</html>
