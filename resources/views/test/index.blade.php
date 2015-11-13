@extends('test/app')

@section('body')
    <h2>Latest posts</h2>
    
    <a class="btn btn-primary" href="{{url('create')}}">New post</a>
        
    @foreach($posts as $post)       
         <h3><a href="{{url($post->id)}}">{{$post->title}}</a></h3>
         <p>{{$post->description}}</p>
    @endforeach
    
    {!! $posts->appends(Request::input()) !!}
    
@stop