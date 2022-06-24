{{-- @dd($post) --}}
@extends('layout.main')
@section('content')
    <article class="mt-3 mb-3">
        <h1>{{ $post->title }}</h1>
        <h5>{{ $post->author }}</h5>
        {{-- Untuk menghindari excaping gunakan echo seperti dibawah ini --}}
        {!! $post->body !!}
    </article>
@endsection