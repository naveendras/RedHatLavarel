@extends('layout.main')

@section('title')
Create Post
@endsection 
@section('body')

<h1>Create Post</h1>
{!! Form::open(['action' => 'PostController@store','method'=>'POST']) !!}
<div class="form-group">
      {{ Form::label('title', 'Title')}}
      {{ Form::text('title','', ['class' => 'form-control'])}}
</div>
<div class="form-group">
        {{ Form::label('body', 'Body')}}
        {{ Form::textarea('body','',  ['id'=>'article-ckeditor','class' => 'form-control'])}}
  </div>

       {{Form::submit('Submit',['class'=>'btn btn-primary'])}} 
    
{!! Form::close() !!}

@endsection