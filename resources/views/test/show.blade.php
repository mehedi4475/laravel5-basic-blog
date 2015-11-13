@extends('test/app')
@section('body')
    <h1>{{$post->title}}</h1>
    <h5>Posted at {{$post->created_at->format('d-M-Y')}}</h5>
    <p>{{$post->description}}</p>
@stop