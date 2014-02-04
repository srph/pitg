<!DOCTYPE html>
<html>
<head>
	<title> PITG :: @yield('title') </title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/stylesheet.css') }}
</head>

<body>
	<div class="container">
		{{-- Navigation --}}
		<div class="navbar navbar-default">
			{{-- Header --}}
			<div class="navbar-header">
				{{-- Group navigation for mobile display --}}
				<button
					type="button"
					class="navbar-toggle"
					data-toggle="collapse"
					data-target="#main-navigation"
				>
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"> PITG </a>
			</div>
			{{-- Links --}}
			<div
				class="collapse navbar-collapse"
				id="main-navigation"
			>
				<ul class="nav navbar-nav">
					<li>
						<a href="#">
							Home
						</a>
					</li>
				</ul>
			</div>
		</div>

		{{-- Main Content --}}
		@yield('content')
	</div>

	{{-- Scripts --}}
	{{ HTML::script('js/jquery-1.10.2.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	{{-- Custom Scripts --}}
	@yield('scripts')
</body>
</html>