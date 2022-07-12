@extends('layout.main')
@section('content')
    <section id="category">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($category as $categories)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $categories->name }}</td>
                                    <td><a href="/admin/categories/edit/{{ $categories->id }}"><button class="btn btn-primary">Edit</button></a><a
                                            href="/admin/categories/delete/{{ $categories->id }}"><button class="btn btn-danger ms-1">Hapus</button></a>
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
