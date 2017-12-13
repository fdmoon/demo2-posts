@extends('layouts.app')

@section('content')
<div class="container">
    <p>{{ $post->title}}</p>
    <p>{{ $post->created_at }}</p>
    <p>{{ $post->author()->first()->name }}</p>
</div>

@endsection