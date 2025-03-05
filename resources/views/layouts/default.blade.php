<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>StationHotels.co.uk</title>
  @vite(['resources/js/app.js'])
</head>
<body class="d-flex flex-column">
	<div id="page-content">

		<header>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-lg-1 col-xl-2">
					</div>

					<div class="col-sm-12 col-lg-9 col-xl-8">
						@if(request()->is('/'))
						<h1>
							<a href="/">
								@yield('logo')
							</a>
						</h1>
						@else
						<span id="logo">
							<a href="/">
								@yield('logo')
							</a>
						</span>
						@endif	
					</div>

				</div>
			</div>
			<!--/.container -->
		</header>


	@yield('content')


	</div>
	<!--/#page-content -->

<footer>
	<div class="container">
		<div class="row">
			<div class="col-6">
				<p>Copyright &copy; {{ date('Y') }} StationHotels.co.uk - All Rights Reserved.</p>
			</div>
			<div class="col-6 text-end">
				<ul>
					<li><a href="#">Privacy</a></li>
				</ul>
			</div>
		</div>
	</div>	
</footer>

</body>
</html>