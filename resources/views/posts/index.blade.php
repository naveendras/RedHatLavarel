@extends('layout.main')

@section('title')
Blog
@endsection 
@section('body')
<h1>Post</h1>

@if(count($posts)>0)
@foreach($posts as $post)
    <div class="well">
    <h5><a href="/posts/{{$post->id}}">{{$post->title}}</a> </h5>
    <small>Written on {{$post->created_at}}</small>
    </div>
@endforeach
@else
<p>No posts found...</p>
@endif

@endsection