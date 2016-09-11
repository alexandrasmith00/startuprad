<div id="top-of-the-feed"></div>

@if($posts->count() > 0)

  <div class="infinite-container">
    @foreach ($posts as $post)
    <div class="infinite-item">
      @include('includes.posts.single')
    </div>
    @endforeach
  </div>

  <div style="font-size: .3em;" class="loader">Loading...</div>
  <a class="infinite-more-link" href="{{ $posts->nextPageUrl() }}"></a>

@endif

@section('scripts')
@parent

<script>
  var infinite = new Waypoint.Infinite({
    element: $('.infinite-container')[0],
  })
</script>

@stop

