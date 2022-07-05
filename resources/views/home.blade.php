@extends('layout.main')
@section('content')
    <div class="row justify-content-center">
        <h1 class="text-center text-dark mb-3">
            Featured
        </h1>

        @php
            $index=rand(0,$posts->count()-1)
        @endphp

        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <a href="/blog/{{ $posts[$index]->slug }}">
                <div class="card">
            <img src="{{ $posts[$index]->image }}" alt="{{ $posts[$index]->slug }}">
            
            <div class="card-body">
                <div class="card-title">
                <h1>{{ $posts[$index]->title }}</h1>
            </div>
                <p>{{ $posts[$index]->excerpt }}</p>
            </div>
        </div>
                </a>
            </div>
        </div>
        
        <h1 class="text-center text-dark mb-3">Postingan Terbaru</h1>
        @if ($posts->count())
            @foreach ($posts as $post)
            <div class="col-md-4">
            <div class="card mb-3 mt-2 shadow">
                <img src="{{ $post->image }}" alt="{{ $post->slug }}">
                <div class="card-body">
                    <div class="card-title">
                        <h1>{{ $post->title }}</h1>
                    </div>
                    <div class="card-text">
                        <p>{{ $post->excerpt }}</p>
                    </div>
                    <div class="card-link">
                        <a href="/blog/{{ $post->slug }}"><button class="btn btn-primary">Baca Selengkapnya</button></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
            <p class="text-center">Not Found!</p>
        @endif
    </div>
@endsection