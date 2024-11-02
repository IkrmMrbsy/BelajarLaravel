@extends('Layouts/Main')

@section('container')

@foreach ($posts as $post)

<article class="mb-5">
    <h2>
        <a style="text-decoration: none;" href="/blog/{{ $post['slug'] }}">{{ $post['title'] }}</a>
    </h2>
    <h5>By : {{ $post["author"] }}</h5>
    <hr class="mt-1" style="width: 100px; color: #8f00ff;">
    <p>{{ $post["content"] }}</p>
    <a href="/blog/{{ $post['slug'] }}" class="btn" style="background-color: #8f00ff; color:white;">See more</a>
    <hr class="mt-4" style="width: 800px; margin: 0 auto; color: #8f00ff; border-width:2px;">
</article>
@endforeach

@endsection