@if ($errors->any())
<div class="alert alert-error">
	 <button type="button" class="close" data-dismiss="alert">&times;</button>
	<h2>Errors</h2>
		<ul>
			{{ implode('',$errors->all('<li  class="bg-danger text-danger">:message</li>')) }}
		</ul>	
</div>

@endif

