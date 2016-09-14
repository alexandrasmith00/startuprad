<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.outside.head')
</head>
  <body>
    @include('modals.upload-picture')

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <div class="show-form">
              @yield('content')
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('layouts.general.scripts')
  </body>
</html>


