@include('__partials/doc')
<body class="dashboard"> <!-- doc zone -->
		<div class="container-fluid">
			@yield('header')
			@yield('sidebar')
			@yield('content')
		</div>
		@yield('footer')	
</body>
</html>
