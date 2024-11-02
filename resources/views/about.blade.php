@extends('Layouts/Main')

@section('container')
    @foreach ($posts as $post)

    <div class="about-section p-5 bg-light rounded-3 mb-5">
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="{{ $post['image'] }}" alt="Profile Picture" class="img-fluid rounded-circle mb-3">
            </div>
            <div class="col-md-8">
                <h1>About Me</h1>
                <h3 class="text-primary">{{ $post['name'] }}</h3>
                <h4 class="text-secondary">{{ $post['email'] }}</h4>
                <p>{{ $post['bio'] }}</p>
                <a href="/contact" class="btn mt-3" style="background-color:  #8f00ff; color:white">Contact Me</a>
            </div>
        </div>
    </div>
        
    @endforeach
@endsection

