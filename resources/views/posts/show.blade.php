@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
 　 <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
    <h1 class="title">
        {{ $post->title }}
    </h1>
    <div class="content">
        <div class="content__post">
            <h3>本文</h3>
            <p>{{ $post->body }}</p>    
        </div>
    </div>
    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
    <div class="footer">
        <a href="/">戻る</a>
    </div>　　　　　　　　　  　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
@endsection