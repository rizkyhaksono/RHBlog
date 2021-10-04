@extends('layouts.main')

@section('container')
    <h1 class="mb-5 text-center">Post Categories</h1>

    <div class="container">
        <div class="row justify-content-center">
        
        @foreach ($categories as $category)
            <div class="col-md-3">
                <a href="/posts?category={{ $category->slug }}">
                    <div class="card bg-dark text-white">
                        
                        <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                        
                        <div class="card-img-overlay d-flex align-items-center p-10">
                            <h5 class="card-title text-center flex-fill p-4 fs-5" style="background-color: rgba(0,0,0,0.4)">{{ $category->name }}</h5>
                        </div>

                    </div>
                </a>
            </div>
        @endforeach

        </div>
    </div>

@endsection
