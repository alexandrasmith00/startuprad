<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>

    <body class="overlay-leftbar">
        @include('includes.header')
        @include('includes.sidebar')

        <section class="main-container">
          <div class="container">
            @yield('content')
          </div>
        </section>

        @include('includes.footer')
        @include('includes.sidebar-right')

        @include('includes.scripts')
    </body>
</html>
