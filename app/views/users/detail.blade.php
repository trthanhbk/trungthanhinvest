@extends('layouts.dashboard')

@section('content')

<h1 class="page-header">{{ trans('labels.Profile Detail')  }}</h1>

{{ Form::model($user, array('action' => 'UsersController@postUpdateProfile', 'class' => 'form-horizontal')) }}

    <div class="form-group">{{ Form::text('username', null, array('class'=>'form-control', 'placeholder'=>'Username', 'readonly' => '')) }}
        {{ ErrorDisplay::DisplayIndividual($errors, "username") }}
    </div>
    <div class="form-group">{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
        {{ ErrorDisplay::DisplayIndividual($errors, "email") }}
    </div>
    <div class="form-group">{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
        {{ ErrorDisplay::DisplayIndividual($errors, "password") }}
    </div>
    <div class="form-group">{{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) }}
        {{ ErrorDisplay::DisplayIndividual($errors, "password_confirmation") }}
    </div>

{{ Form::submit(trans('labels.Change'), array('class'=>'btn btn-large btn-primary'))}}
{{ Form::close() }}

@stop

@section('scripts')

	<script type="text/javascript">
		function alertBeforeRedirect(){
			return confirm('{{ trans("labels.Are you sure?") }}');
		}
	</script>

@stop