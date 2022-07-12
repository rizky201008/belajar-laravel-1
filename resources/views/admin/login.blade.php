@extends('layout.main')
@section('content')
    <section id="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    @if (session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Oh No!</strong> {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="" method="post">
                        @csrf
                        <label class="form-label" for="email">Email</label>
                        <input type="text" name="email" id="email"
                            class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <div class="invalid-feedback mb-3">
                                {{ $message }}
                            </div>
                        @enderror
                        <label class="form-label" for="password">Password</label>
                        <input type="password" name="password" id="password"
                            class="form-control @error('password') is-invalid @enderror mb-3">
                        @error('password')
                            <div class="invalid-feedback mb-3">
                                {{ $message }}
                            </div>
                        @enderror
                        <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
