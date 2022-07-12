@extends('layout.main')
@section('content')
    <section id="form-cedit">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <form action="" method="post">
                        @csrf
                        <label for="nama">Nama Kategori</label>
                        <input type="text" name="kategori">
                        <button class="btn btn-primary w-100" type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection