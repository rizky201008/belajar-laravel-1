@extends('layout.main')
@section('content')
    <h1 class="text-dark">Semua Kategori</h1>
    @foreach ($categories as $category)
        <a href="/category/{{ $category->slug }}"><h1>{{ $category->name }}</h1></a>
        <hr/>
    @endforeach
@endsection