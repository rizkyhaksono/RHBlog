@extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-lg-5">
            
            <main class="form-registration">
                <i class="bi bi-person d-flex justify-content-center mb-2" style="font-size: 2rem; color:#d9534f"></i>
                <h1 class="h3 mb-3 fw-normal text-center">Sign Up</h1>
                <form action="/register" method="POST">
                    
                    @csrf
                
                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                    <label for="name">Name</label>
                    
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                    <label for="username">Username</label>
                    
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="email">Email address</label>

                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>

                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
            
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                </form>
                <small class="mt-2 mb-1 d-block text-center">Already registered? <a href="/login">Login</a></small>

                <small class="mt-1 mb-1 text-muted d-flex justify-content-center">&copy; </small>
            </main>
        
        </div>
    </div>

@endsection