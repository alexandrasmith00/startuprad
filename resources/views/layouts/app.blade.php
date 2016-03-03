<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
    

  <body class="hold-transition skin-blue">
    <div class="wrapper">
        
        @include('includes.header')
        @include('includes.sidebar')
        
        <div class="content-wrapper">
          <section class="content">
            @yield('content')
          </section>
        </div>
    
        @include('includes.footer') 
        @include('includes.scripts')

    </div>
</body>
</html>



    
