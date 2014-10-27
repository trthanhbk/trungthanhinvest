@extends('layouts.main')

@section('content')

{{ Form::open(array('action'=>'UsersController@postForgotPassword', 'class'=>'form-signin')) }}
<h2 class="form-signin-heading">{{ trans('labels.Forgot Password')  }}</h2>

<div class="form-group">{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email' ) ) }}</div>

{{ Form::submit(trans('labels.Send'), array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}

@stop