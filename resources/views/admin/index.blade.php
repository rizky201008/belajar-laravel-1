@extends('admin.main')
@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <form action="" method="post">
                        @csrf
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control mb-3" name="title" id="title">
                        <label for="catid" class="form-label">Kategori</label>
                        <input type="text" class="form-control mb-3" name="catid" id="catid">
                        <label for="ecpt" class="form-label">Excerpt</label>
                        <input type="text" class="form-control mb-3" name="ecpt" id="ecpt" placeholder="Masukkan teks singkat tentang artikel anda">
                        <label for="body" class="form-label">Isi Artikel</label>
                        <textarea name="body" id="body" class="form-control"></textarea>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Posting</button>
                    </form>
                    {{-- <div id="editor"></div> --}}
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
