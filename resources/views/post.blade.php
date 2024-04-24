@extends('layouts.main');


@section('container')
    <article>
        <h1>{{ $post['judul'] }}</h1>
        <h5>By.:{{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    </article>

    <a href="/blog">Back to posts</a>
@endsection();
