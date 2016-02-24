@extends('layouts.sidebar')

@section('content')


        <h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
        <hr>
        <ul>
            @foreach ($posts as $post)
            <li>
                  <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                  <em>({{ $post->published_at->format('M jS Y g:ia') }})</em>
                  <p>
                    {{ str_limit($post->content) }}
                  </p>
                
                    <h2>Comments</h2>
                    @if($post->comments()->count() > 0)
                        @foreach($post->comments as $comment)
                            @include('includes.comments.comment')
                        @endforeach
                    @else
                        <p>Pas de commentaire</p>
                    @endif
            </li>
            @endforeach
        </ul>
        <hr>
<!--        {!! $posts->render() !!}-->


@stop