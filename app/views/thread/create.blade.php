@extends('template.master')

@section('title') Create a new thread! @stop

@section('content')
	<div class="row">
		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-body">
					<h4> Create a new thread </h4>
					<hr>

					{{ Form::open(array('action' => 'ThreadController@store', 'method' => 'POST')) }}
						{{ Form::token() }}

						<div class="form-group">
							<label> Title </label>
							{{ Form::text('title', null, array('class' => 'form-control')) }}
							<p class="help-block">
								Keep it short and brief!
							</p>
						</div>

						<div class="form-group">
							<label> Content </label>
							{{ Form::textarea('body', null, array('class' => 'form-control')) }}
							<p class="help-block">
								Must contain more than 10 words
							</p>
						</div>

						<div class="form-group">
							<label> Tags </label>
							{{ Form::text('tags', null, array('class' => 'form-control')) }}
							<p class="help-block">
								Seperate each tag with an enter or comma (,)
							</p>
						</div>

						{{ Form::submit('Post thread', array('class' => 'btn btn-primary')) }}
					{{ Form::close() }}
				</div>
			</div>
		</div>

		<div class="col-md-3">
		</div>
	</div>
@stop