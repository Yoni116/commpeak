
@extends('layout')
@section('content')


<div class="col-lg-4">
<h1>Contact Us</h1>

<ul>
@foreach($errors->all() as $error)
        <li>{{ $error }}</li>
@endforeach
</ul>


{!! Form::open(array('route' => 'contact_save', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('Your Name') !!}
    <br>
    {!! Form::text('name', null,
        array('required',
            'class'=>'form-control',
            'placeholder'=>'Your name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your E-mail Address') !!}
    <br>
    {!! Form::text('email', null,
        array('required|email',
            'class'=>'form-control',
            'placeholder'=>'example@example.com')) !!}
</div>

<div class="form-group">
    {!! Form::label('Subject') !!}
    <br>
    {!! Form::text('subject', null,
    array('required',
    'class'=>'form-control',
    'placeholder'=>'Subject')) !!}
</div>

<div class="form-group">
    {!! Form::label('Content') !!}
    <br>
    {!! Form::textarea('content', null,
        array('required',
            'class'=>'form-control',
            'placeholder'=>'Your message')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Contact Us!',
        array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}

</div>