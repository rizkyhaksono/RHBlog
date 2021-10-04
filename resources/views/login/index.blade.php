@extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-md-4">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <main class="form-signin">
                <i class="bi bi-person-circle d-flex justify-content-center mb-2" style="font-size: 2rem; color:#d9534f"></i>
                <h1 class="h3 mb-3 fw-normal text-center">Sign In</h1>
                <form action="/login" method="post">
                    
                    @csrf

                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

                </form>
                <small class="mt-2 mb-1 d-block text-center">Not registered? <a href="/register">Register Now!</a></small>
                <small class="mt-1 mb-1 text-muted d-flex justify-content-center">&copy; 2021</small>
            </main>
        
        </div>
    </div>

@endsection