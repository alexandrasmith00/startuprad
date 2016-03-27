@if($posts->count() > 0)
  @foreach ($posts as $post)
    @include('includes.posts.single')
  @endforeach

<div class="text-center">
    {!! $posts->render() !!}
</div>

@endif

