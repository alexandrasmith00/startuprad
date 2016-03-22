<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
    

<body class="login-page">
    
    <section class="login-container boxed-login">
      <div class="container">
        <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
          <div class="login-form-container">
            @yield('content')
          </div>
        </div>
      </div>
  </section>

    
    @include('includes.scripts')
</body>
</html>



    


