@extends('layout.main')

@section('title')
{{$title}}
@endsection

@section('body')
<h1>Services Page</h1>
@if(count($cats)>0)
    <ul>
        @foreach($cats as $cat)
    <li>{{$cat}}</li>
        @endforeach
    </ul>    
@endif
@endsection