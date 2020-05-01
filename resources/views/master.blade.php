<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">
	<base href="https://shrouded-cove-28195.herokuapp.com/">
	<title>@yield('title')</title>
</head>
<body>
	@include('shared.navbar')

	@yield('content')

	<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
				<h4>Robotics</h4>
			</div>
			<div class="col-md-11"></div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<ul>
					<li><a href="/#aboutus">About us</a></li>
					<li><a href="/#careers">Careers</a></li>
					<li><a href="/#learning">Learning</a></li>
				</ul>
			</div>
			<div class="col-md-4">
				<ul>
					<li><a href="/#aboutus">About us</a></li>
					<li><a href="/#careers">Careers</a></li>
					<li><a href="/#learning">Learning</a></li>
				</ul>
			</div>
			<div class="col-md-4">
			<ul>
					<li><a href="/#aboutus">About us</a></li>
					<li><a href="/#careers">Careers</a></li>
					<li><a href="/#learning">Learning</a></li>
				</ul>
			</div>
		</div>
    </div>
	</footer>
	
	<script type="text/javascript" src="{!! asset('js/jquery.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('js/bootstrap.js') !!}"></script>
</body>
</html>
