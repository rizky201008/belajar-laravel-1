@extends('layout.main')
@section('content')
        @foreach ($posts as $post)
        <article class="mt-3 mb-3">
            <h1>
                <a href="blog/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            <p><strong>By Vixiloc in</strong> <a href="/category/{{ $post->category->name }}">{{ $post->category->name }}</a></p
            <p>{{ $post->excerpt }}</p>
        </article>
         @endforeach
@endsection