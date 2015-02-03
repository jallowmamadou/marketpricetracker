@section('styles')
    {{ HTML::style('css/sticky.css') }}
    {{ HTML::style('css/login.css') }}
@stop

@section('header')
	<header>
		<h1>Market Price Tracking System</h1>
      	<span>MPTS V0.1 alpha</span>
      <hr>
	</header>
@stop
	
@section('footer')
  @include('inc/footer')
@stop