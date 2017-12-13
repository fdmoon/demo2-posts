@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($posts as $post)
        <div class="panel panel-default">
            <div class="panel-body">
                <a href="/posts/{{$post->id}}">{{ $post->title }}</a> |
                <a href="/posts/{{$post->id}}/edit">edit</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection