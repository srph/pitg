@extends('template.master')

@section('title') View Thread - {{ $thread->title }} @stop

@section('content')
	<div class="row">
		{{-- Main Content--}}
		<div class="col-md-9">
			{{-- Thread --}}
			<div class="panel panel-default">
				<div class="panel-body">
					<h3> {{ $thread->title }} </h3>
					<hr>
					{{ $thread->body }}
				</div>
			</div>
		</div>

		{{-- Sidebar --}}
		<div class="col-md-3">
		</div>
	</div>
@stop