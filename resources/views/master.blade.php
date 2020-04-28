<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">
	<title>@yield('title')</title>
</head>
<body>
	@include('shared.navbar')

	@yield('content')
	
	<script type="text/javascript" src="{!! asset('js/jquery.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('js/bootstrap.js') !!}"></script>
</body>
</html>
