@extends('layout.main')
@section('content')
    <div class="row justify-content-center">
        <h1 class="text-center text-dark">Postingan Terbaru</h1>
        @if ($posts->count())
            @foreach ($posts as $post)
            <div class="col-md-4">
            <div class="card mb-3 mt-2 shadow">
                <img src="{{ $post->image }}" alt="{{ $post->slug }}">
                <div class="card-body">
                    <div class="card-title">
                        {{ $post->title }}
                    </div>
                    <div class="card-text">
                        {{ $post->excerpt }}
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