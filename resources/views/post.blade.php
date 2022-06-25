{{-- @dd($post) --}}
@extends('layout.post')
@section('content')
    <article class="mt-3 mb-3">
        <h1>{{ $post->title }}</h1>
        <p>By Vixiloc in <a href="/category/{{ $post->category->name }}">{{ $post->category->name }}</a></p>
        {{-- <h5>{{ $post->author }}</h5> --}}
        {{-- Untuk menghindari excaping gunakan echo seperti dibawah ini --}}
        {!! $post->body !!}
    </article>
@endsection