@extends('layout')
@section('content')
    <h1>
        <a href="{{ route('posts.edit', ['post' => $post->id]) }}">
            {{ $post->title }}
        </a>
    </h1>
    <p>{{ $post->content }}</p>

    <p>Added: {{ $post->created_at->diffForHumans() }}</p>
@endsection
