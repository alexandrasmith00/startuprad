<a id="show-message" style="display: none;" data-toggle="collapse" data-target="#banner"></a>

<div id="banner" class="collapse">
  <div class="container">
    <div style="margin-bottom: 5px; margin-top: 5px;" class="alert" role="alert">
      <button type="button" class="close" data-toggle="collapse" data-target="#banner" aria-label="Close">
        <span>&times;</span>
      </button>
      <span id="flash-message">{{ Session::get('flash-message') }}</span>

    </div>
  </div>
</div>

@section('scripts')
@parent


<script>
  $( document ).ready(function() {
      if ( $('#flash-message').html() != '')
        $('#show-message').click();
  });
</script>

@stop
