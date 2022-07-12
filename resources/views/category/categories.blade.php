@extends('layout.main')
@section('content')
    <h1 class="text-dark text-center mb-3">Semua Kategori</h1>
    @if ($categories->count())
        @foreach ($categories as $category)
        <a href="/category/{{ $category->slug }}">
        <div class="card mb-3 rounded shadow">
            <div class="card-body">
                <h1>{{ $category->name }}</h1>
            </div>
            </a>
        </div>
    @endforeach
    @else
        <p class="text-center">Not Found!</p>
    @endif
@endsection