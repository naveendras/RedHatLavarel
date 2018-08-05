@extends('layout.main')

@section('title')
Blog
@endsection 
@section('body')

<a href="/posts" class="btn btn-default">Go Back</a>
<h4>{{$post->title}}</h4>

<p>{!!$post->body!!}</p>

    <small>Written on {{$post->created_at}}</small>

    <hr>

<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

<div style="float: right;">
    {!! Form::open(['action' => ['PostController@destroy',$post->id],'method'=>'POST']) !!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}} 

{!! Form::close() !!}
</div>

@endsection