<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.admin.head')

  </head>
  <body>

    @include('layouts.general.banner')


    <nav id="menu" class="menu slideout-menu">
      @include('layouts.admin.sidebar')
    </nav>

    <main id="main">
      @include('layouts.admin.navbar')
      <div id="page-content" style="display: none;" class="page-content-wrapper">

        <div style="padding-top: 25px;" class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12">
              @yield('content')
            </div>
          </div>
        </div>
      </div>
    </main>

    @include('layouts.general.scripts')

    <script>
      $(window).load(function() {
        $("#page-content").fadeIn("slow");
      });
    </script>

  </body>
</html>


