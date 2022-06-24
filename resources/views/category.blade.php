@extends('layout.main')
@section('content')
        @foreach ($category->post as $item)
        <article class="mt-3 mb-3">
            <h1>
                <a href="/blog/{{ $item->slug }}">
                    {{ $item->title }}
                </a>
            </h1>
            
            <p>{{ $item->excerpt }}</p>
            </article>
        @endforeach
@endsection