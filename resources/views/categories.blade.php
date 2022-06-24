@extends('layout.main')
@section('content')
    <h1 class="text-dark text-center mb-3">Semua Kategori</h1>
    @if ($categories->count())
        @foreach ($categories as $category)
        <a href="/category/{{ $category->slug }}"><h1>{{ $category->name }}</h1></a>
        <hr/>
    @endforeach
    @else
        <p class="text-center">Not Found!</p>
    @endif
@endsection