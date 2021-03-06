{{-- @dd($post) --}}
@extends('layout.post')
@section('title')
    <h1>{{ $post->title }}</h1>
    <p>By User in <a href="/category/{{ $post->category->name }}">{{ $post->category->name }}</a></p>
@endsection
@section('thumbnail')
    <img class="shadow" src="{{ $post->image }}" alt="{{ $post->slug }}" style="max-width: 100%;">
@endsection
@section('body')
    <article class="mt-3 mb-3">
        {{-- <h5>{{ $post->author }}</h5> --}}
        {{-- Untuk menghindari excaping gunakan echo seperti dibawah ini --}}
        {!! $post->body !!}
    </article>
@endsection