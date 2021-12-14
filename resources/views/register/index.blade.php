@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-signin">
                <h1 class="h3 mb-5 fw-normal text-center">Please Register</h1>

                <form action="/register" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="text" class="form-control @error('name')
                            is-invalid
                        @enderror" name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mt-3">
                        <input type="text" class="form-control @error('username')
                            is-invalid
                        @enderror" name="username" id="username" placeholder="Username" required
                            value="{{ old('username') }}">
                        <label for=" username">Username</label>
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mt-3">
                        <input type="email" class="form-control @error('email')
                            is-invalid
                        @enderror" name="email" id="floatingInput" placeholder="E-Mail" required
                            value="{{ old('email') }}">
                        <label for=" floatingInput">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mt-3">
                        <input type="password" class="form-control @error('password')
                            is-invalid
                        @enderror" name="password" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                    <small class="d-block text-center mt-3">Have an account? <a href="/login">Login</a></small>
                    <p class="mt-2 text-muted text-center">&copy; 2021</p>
                </form>
            </main>
        </div>
    </div>
</div>
@endsection