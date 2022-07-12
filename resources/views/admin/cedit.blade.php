@extends('layout.main')
@section('content')
    <section id="form-cedit">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <form action="" method="post">
                        @csrf
                        <label for="nama" class="form-label">Nama Kategori</label>
                        <input type="text" name="kategori" class="form-control mb-3" value="{{ $category['name'] }}">
                        <button class="btn btn-primary w-100" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection