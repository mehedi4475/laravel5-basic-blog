@extends('test/app')

@section('body')

{!! Form::open(array('method'=>'post','action' => array('Test@update', $editPost->id))) !!}

<div class="form-group">
    {!! Form::label('email', 'Title', array('for' => 'title')); !!}
    {!! Form::text('title', $editPost->title, array('class' => 'form-control', 'placeholder'=>'Post title')); !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Description', array('for' => 'description')); !!}
    {!! Form::textarea('description', $editPost->description, array('class' => 'form-control', 'placeholder'=>'Post description')); !!}
</div>


<div class="form-group">
    {!! Form::submit('Update', array('class'=>'btn btn-primary')); !!}
</div>

{!! Form::close()!!}

@stop