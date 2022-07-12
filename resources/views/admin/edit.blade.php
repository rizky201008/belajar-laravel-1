@extends('layout.main')
@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-11">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Yes!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="" method="post">
                        @csrf
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control mb-3 @error('title') is-invalid @enderror" name="title"
                            id="title" value="{{ $post['title'] }}">
                            @error('title')
                            <div class="invalid-feedback mb-3">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="catid" class="form-label">Kategori</label>
                        <select class="form-select @error('catid') is-invalid @enderror mb-3" name="catid">
                            @foreach ($category as $categories)
                            <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                            @endforeach
                        </select>
                        <label for="ecpt" class="form-label">Excerpt</label>
                        <input type="text" class="form-control mb-3 @error('ecpt') is-invalid @enderror" name="ecpt"
                            id="ecpt" placeholder="Masukkan teks singkat tentang artikel anda" value="{{ $post['excerpt'] }}">
                        @error('ecpt')
                            <div class="invalid-feedback mb-3">
                                {{ $message }}
                            </div>
                        @enderror
                            <label for="body" class="form-label">Isi Artikel</label>
                        <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror">{{ $post['body'] }}</textarea>
                        @error('body')
                            <div class="invalid-feedback mb-3">
                                {{ $message }}
                            </div>
                        @enderror
                        <button type="submit" class="btn btn-primary w-100 mt-3">Posting</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="/ckeditor/build/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector('#body')).catch(error => {
            console.error(error);
        });
    </script>
@endsection