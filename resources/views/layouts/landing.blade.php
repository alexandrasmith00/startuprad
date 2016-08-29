<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.landing.head')
  </head>
  <body>

    @include('layouts.general.banner')

    @yield('content')

    @include('layouts.landing.scripts')

  </body>
</html>
