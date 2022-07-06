@extends('layout.main')
@section('content')
    <div class="row justify-content-center">
        @if ($posts->count())
            <h1 class="text-center text-dark mb-3">Postingan Terbaru</h1>
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
                                <a href="/blog/{{ $post->slug }}"><button class="btn btn-primary">Baca
                                        Selengkapnya</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-center">Nothing to show please <a href="/admin">create post</a> first</p>
        @endif
    </div>
@endsection