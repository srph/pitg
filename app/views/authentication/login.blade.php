{{-- Authentication Modal --}}
<div class="modal fade"
	id="login-modal"
	tabindex="-1"
	role="dialog"
	aria-labelledby="login-modal-title"
	aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button"
						class="close"
						data-dismiss="modal"
						aria-hidden="true">
					&times;
				</button>

				<h4 class="modal-title" id="login-modal-title">Login</h4>
			</div>

			<div class="modal-body">
				{{ Form::open(array('action' => 'AuthenticationController@postLogin')) }}
					{{ Form::token() }}

					<div class="form-group">
						<label> Email </label>
						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-envelope"></span>
							</span>
							{{ Form::email('email', null, array('class' => 'form-control')) }}
						</div>
					</div>

					<div class="form-group">
						<label> Password </label>
						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-lock"></span>
							</span>
							{{ Form::password('password', array('class' => 'form-control')) }}
						</div>
					</div>

					{{ Form::submit('Login', array('class' => 'btn btn-info btn-block btn-lg' )) }}
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>