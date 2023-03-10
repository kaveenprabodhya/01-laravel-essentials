@extends('layout')
@section('content')
    <a type="button" class="btn btn-primary" href="{{ route('posts.create') }}">Add New Post</a>
    <hr>
    <ul class="list-group list-group-flush">
        @forelse ($posts as $post)
            {{-- <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li> --}}
            <li class="list-group-item">
                <a href="{{ route('posts.show', ['post' => $post->id]) }}">
                    {{ $post->title }}
                </a>

                <div class="float-end">
                    <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </div>
            </li>
        @empty
            <p>No posts found.</p>
        @endforelse
    </ul>
@endsection
