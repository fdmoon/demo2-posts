@extends('layouts.app')

@section('content')

    
    <div class="container">
        <h2>Editing {{ $post->title }}</h2>
        <form action="{{ route('posts.update', $post->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
            <label for="title">Title</label>
            <input name="title" type="text" value="{{$post->title}}">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
@endsection