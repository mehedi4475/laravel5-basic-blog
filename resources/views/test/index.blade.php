@extends('test/app')

@section('body')
    <h2>Latest posts</h2>
    
    <a class="btn btn-primary" href="{{url('create')}}">New post</a>
        
    @foreach($posts as $post)       
         <h3><a href="{{url($post->id)}}">{{$post->title}}</a></h3>
         <span><a href="{{URL($post->id)}}/edit">Edit</a></span>
         <span><a href="{{URL($post->id)}}/delete">Delete</a></span>
         <p>{{$post->description}}</p>
    @endforeach
    
    {!! $posts->appends(Request::input()) !!}
    
@stop