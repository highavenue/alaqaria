<!DOCTYPE html>
<html lang="en">

<head>
	@include('partials._head')
</head> 

<body>
	@include('partials._topbar')
	@include('partials._navbar')
	@yield('bannerslider')
	
	
	@yield('content')

	@include('partials._footer')

	
	@include('partials._javascript')
	@yield('scripts')


</body>

</html>