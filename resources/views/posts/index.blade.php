@extends('layout.main')

@section('title')
Blog
@endsection 
@section('body')
<h1>Post</h1>

@if(count($posts)>0)
@foreach($posts as $post)
    <div class="well">
       <h3> {{$post->title}}</h3>
    <small>Written on {{$post->created_at}}</small>
    </div>
@endforeach
@else
<p>No posts found...</p>
@endif

@endsection