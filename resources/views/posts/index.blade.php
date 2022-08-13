@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
    <h1>Blog Name</h1>
    <div class='create'>[<a href='/posts/create'>create</a>]</div>
    <div class='posts'>
        @foreach ($posts as $post)
            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Delete?')">delete</button>
            </form>
            <div class='post'>
                <h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <p class='body'>{{ $post->body }}</p>
            </div>
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
    <div>
        @foreach($questions as $question)
            <div>
                <a href="https://teratail.com/questions/{{ $question['id'] }}">
                {{ $question['title'] }}
                </a>
            </div>
        @endforeach
    </div>
@endsection

