<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}">
</head>
<body>
@yield('content')
<script type="text/javascript" src="{{asset('vendors/jquery/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
</body>
</html>