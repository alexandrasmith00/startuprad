<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
    

  <body class="hold-transition skin-blue">
    <div class="wrapper">

    
        @include('includes.header')
        
        @include('includes.sidebar')


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
<!--
         Content Header (Page header) 
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
-->
          
        <section class="content">
            @yield('content')
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
        
        
        @include('includes.footer')
    
            
        @include('includes.scripts')

    </div>
</body>
</html>



    
