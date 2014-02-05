<!DOCTYPE html>
<html>
<head>
	<title> PITG :: @yield('title') </title>
	<meta charset="utf-8">
	{{ HTML::style('css/fonts.css') }}
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/stylesheet.css') }}
</head>

<body>
	<div class="container">
		{{-- Navigation --}}
		<div class="navbar navbar-inverse">
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
			<div class="collapse navbar-collapse" id="main-navigation">
				<ul class="nav navbar-nav">
					<li>
						<a href="#">
							Home
						</a>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if(Sentry::check())
						{{-- User Settings --}}
						<li>
							<a
								href="#"
								class="dropdown-toggle"
								data-toggle="dropdown"
							>
								<span class="glyphicon glyphicon-cog"></span>
							</a>

							{{-- Settings Dropdown --}}
							<ul class="dropdown-menu">
								<li>
									<a href="#">
										<span class="glyphicon glyphicon-lock"></span>
										Account Settings
									</a>
								</li>

								<li>
									<a href="#">
										<span class="glyphicon glyphicon-user"></span>
										Profile Settings
									</a>
								</li>
								
								<li class="divider"></li>

								<li>
									<a href="{{ URL::to('auth/logout') }}">
										<span class="glyphicon glyphicon-remove"></span>
										Logout
									</a>
								</li>
							</ul>
						</li>
					@else
						{{-- Authentication Navigation --}}
						<li>
							<a href="#" data-toggle="modal" data-target="#login-modal">
								Login
							</a>
						</li>

						<li>
							<a href="#">
								 Register
							</a>
						</li>
					@endif
				</ul>
			</div>
		</div>

		{{-- Main Content --}}
		@yield('content')
	</div>

	{{-- Scripts --}}
	{{ HTML::script('js/jquery-1.10.2.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	{{-- Modals --}}
	@if(!Sentry::check()) @include('authentication.modals') @endif
	{{-- Custom Scripts --}}
	@yield('scripts')
</body>
</html>