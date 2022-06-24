@extends('layout.main')
@section('content')
        @foreach ($posts as $post)
        <article class="mt-3 mb-3">
            <h1>
                <a href="blog/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            <h5>{{ $post->author }}</h5>
            <p>{{ $post->excerp }}</p>
        </article>
         @endforeach
@endsection