@extends('template.master')

@section('title') Account Settings @stop

@section('content')
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
				<a href="#"
					class="list-group-item active">
					<span class="glyphicon glyphicon-lock"></span>
					Account Settings
				</a>
				<a href="{{ URL::route('profile_settings') }}"
					class="list-group-item">
					<span class="glyphicon glyphicon-user"></span>
					Profile Settings
				</a>
			</div>
		</div>

		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-body">
					<h4> General Account Settings </h4>
					<hr>

					{{ Form::open() }}

						{{-- Email --}}
						<div class="form-group">
							<label> Email </label>
							{{ Form::email('email',
								$user->loggedIn()->email,
								array('class' => 'form-control')) }}
						</div>

						<hr>

						{{-- Password --}}
						<div class="form-group">
							<label> Password </label>
							{{ Form::password('password',
								array('class' => 'form-control')) }}
						</div>

						<div class="form-group">
							{{ Form::password('password',
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