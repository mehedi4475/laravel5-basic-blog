@extends('test/app')


@section('body')

{!! Form::open(array('url' => 'create')) !!}

<div class="form-group">
    {!! Form::label('email', 'Title', array('for' => 'title')); !!}
    {!! Form::text('title', '', array('class' => 'form-control', 'placeholder'=>'Post title')); !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Description', array('for' => 'description')); !!}
    {!! Form::textarea('description', '', array('class' => 'form-control', 'placeholder'=>'Post description')); !!}
</div>


<div class="form-group">
    {!! Form::submit('Publish', array('class'=>'btn btn-primary')); !!}
</div>

{!! Form::close()!!}

@stop



