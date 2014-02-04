@extends('template.master')

@section('title') Home @stop

@section('content')
	<div class="row">

		{{-- Thread Listing --}}
		<div class="col-md-9">
		
			{{-- Tab pane --}}
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#recent" data-toggle="tab">
						Recent
					</a>
				</li>

				<li>
					<a href="#hot" data-toggle="tab">
						Hot
					</a>
				</li>
			</ul>

			{{-- Content --}}
			<div class="tab-content">
				<div class="tab-pane active" id="recent">
					<div class="row thread">
						{{-- Basic Thread Stats --}}
						<div class="col-md-1">
							<h4 class="text-center">
								0 <br />
								<small> votes </small>
							</h4>
						</div>

						<div class="col-md-1">
							<h4 class="text-center">
								0 <br />
								<small> posts </small>
							</h4>
						</div>

						<div class="col-md-1">
							<h4 class="text-center">
								1 <br />
								<small> hits </small>
							</h4>
						</div>

						<div class="col-md-9">
							<h4> Yolowing cuz I too yolo swag holy sheit. How do I swag? </h4>
						</div>
					</div>
					<hr>
				</div>
			</div>

		</div>

	</div>
@stop