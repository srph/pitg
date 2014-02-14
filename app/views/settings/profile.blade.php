@extends('template.master')

@section('title') Profile Settings @stop

@section('content')
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
				<a href="{{ URL::route('user_settings') }}"
					class="list-group-item">
					<span class="glyphicon glyphicon-lock"></span>
					Account Settings
				</a>
				<a href="#"
					class="list-group-item active">
					<span class="glyphicon glyphicon-user"></span>
					Profile Settings
				</a>
			</div>
		</div>

		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-body">
					<h4> Profile Settings </h4>
					<hr>

					{{ Form::open() }}
						{{-- First Name --}}
						<div class="form-group">
							<label> First Name </label>
							{{ Form::text('first_name',
								$user->loggedIn()->first_name,
								array('class' => 'form-control')) }}
						</div>

						{{-- Last Name --}}
						<div class="form-group">
							<label> Last Name </label>
							{{ Form::text('last_name',
								$user->loggedIn()->last_name,
								array('class' => 'form-control')) }}
						</div>

						<hr>

						{{ Form::submit('Update Account',
							array('class' => 'btn btn-success')) }}
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
@stop