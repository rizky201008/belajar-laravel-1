@extends('admin.main')
@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="text-center mb-3">Semua Postingan</h1>
                <div class="col-md">
                    <table class="table table-primary shadow-lg">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Excerpt</th>
                                <th scope="col">Isi Postingan</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($post as $posts)
                                <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $posts->title }}</td>
                                <td>{{ $posts->excerpt }}</td>
                                <td>{!! $posts->body !!}</td>
                                <td>{{ $posts->category->name }}</td>
                                <td>
                                        <a href="/admin/edit"><button class="btn btn-primary">Edit</button></a>
                                        <a href="/admin/delete"><button class="btn btn-danger">Hapus</button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
