@extends('Layouts/Main')

@section('container')
<div class="d-flex justify-content-center">
    <article class="text-center">
        <h2>{{ $post['title'] }}</h2>
        <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="mx-auto d-block" style="max-width: 50%; height: auto;">
        <h5 class="text-left">By: {{ $post['author'] }}</h5>
        <p class="mt-5">{{ $post['content'] }}</p>
    </article>
</div>
@endsection

