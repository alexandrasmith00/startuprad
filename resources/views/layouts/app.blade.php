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

              @yield('content')

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


