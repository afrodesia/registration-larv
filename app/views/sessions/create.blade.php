@extends('layouts.master')

@section('meta-title', 'registration.it - Log In!')

@section('content')

	<div class="starter-template">
        <h1>Log In!</h1>
        

        {{ Form::open(['route' => 'sessions.store']) }}


		<!--Email Field  -->
		<div class"form-group">
			{{ Form::label('email', 'Email:') }}
			{{ Form::text('email', null, ['class' => 'form-control' ]) }}
			{{ errors_for('email', $errors) }}
			

		</div>

		<!--Password Field  -->
		<div class"form-group">
			{{ Form::label('password', 'Password:') }}
			{{ Form::password('password', ['class' => 'form-control']) }}
			{{ errors_for('password', $errors) }}
		
		</div>

		<!--Submit  -->
		<div class"form-group submit">
			{{ Form::submit('Log In!', ['class' => 'btn btn-primary']) }}
		</div>

		

        {{ Form::close() }}
    </div>

@stop