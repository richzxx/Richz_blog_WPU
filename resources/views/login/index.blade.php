@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">

            @if (session()->has('success'))
            <div class="alert text-center alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if (session()->has('loginError'))
            <div class="alert text-center alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if (session()->has('logoutSuccess'))
            <div class="alert text-center alert-success alert-dismissible fade show" role="alert">
                {{ session('logoutSuccess') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <main class="form-signin">
                <h1 class="h3 mb-5 fw-normal text-center">Please Login</h1>

                <form action="/login" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email')
                            is-invalid
                        @enderror @if (session()->has('loginError'))
                            is-invalid
                        @endif" id="email" placeholder="Email" autofocus required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        @if (session()->has('loginError'))
                        <div class="invalid-feedback">
                            {{ session('loginError') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-floating mt-3">
                        <input type="password" name="password" class="form-control @error('password')
                            is-invalid
                        @enderror @if (session()->has('loginError'))
                            is-invalid
                        @endif" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                    <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register
                            Now!</a></small>
                    <p class="mt-2 text-muted text-center">&copy; 2021</p>
                </form>
            </main>
        </div>
    </div>
</div>
@endsection