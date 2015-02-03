@if(!empty($menu))

			<ul class="navigation">
			@foreach ($menu as $key => $value) 
				@if($value['visible'] == 1)
					@if($value['type'] == 'single')
						<li>{{HTML::link($value['url'],$value['name'],['class'=>'link'])}}</li>
					@endif
				@endif
			@endforeach
			</ul>	            
	        <div class="navbar" id="user_options">
				<ul class="nav pull-right">
				@foreach ($menu as $key => $value) 
					@if($value['visible'] == 1)
						@if($value['type'] == 'drop')
							<li class="dropdown">
								{{HTML::link($value['url'],$value['name'],['class'=>'dropdown-toggle usrname fix', 'data-toggle'=>"dropdown"])}}
									<ul class="dropdown-menu">
										@foreach($value['menu'] as $ke => $valu)
									<li>
										{{HTML::link($valu['url'],$valu['name'])}}<b class="caret"></b> 		
									</li>									
										@endforeach
								</ul>
							</li>
						@endif
					@endif
				@endforeach
				</ul>       								                 		            	
	        </div>
@endif
