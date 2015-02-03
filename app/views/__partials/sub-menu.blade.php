<div class="acctheda  fixheda_style">
	<div class="navbar">
		<div class="navbar-inner">
			<div class="hedacont">	
			    <a class="active brand blr" href="#" id="menu" title="click here to see a navigation"><i class="fa fa-bars"></i></i>MENU</a>
			    <ul class="nav">
				      <li><a href="{{route('land-lords.create')}}" title="add a land lord"><i class="fa fa-plus"></i> Land Lord</a></li>
				      <li><a href="{{route('compounds.create')}}" title="add a Compound"><i class="fa fa-plus"></i> Compound</a></li>
				       <li><a href="{{route('plots.create')}}"><i class="fa fa-plus"></i> Add Plot</a></li>
				      <li><a href="{{route('staffs.create')}}" title="add a Hous"><i class="fa fa-plus"></i> Staff</a></li>
				      <!-- <li><a href="{{route('payments.create')}}">Add Payment</a></li> -->
				      <li class="blr">
				      	<a href="#" id="checker">Checking</a>
				      </li>
			    </ul>
			    <div class="popover fade bottom in" id="studentChecker">
			      	<div class="arrow"></div>
			      	<h3 class="popover-title">Checking For A Customer</h3>
			      	<div class="popover-content">
						<div class="tabbable"> <!-- Only required for left/right tabs -->
							<ul class="nav nav-tabs">
							    <li class="active"><a href="#tab1" data-toggle="tab">Plot Number</a></li>
							    <li><a href="#tab2" data-toggle="tab">Customer Details</a></li>
							    <li><a href="#tab3" data-toggle="tab">Tenant</a></li>
							</ul>
							<hr>
							<div class="tab-content">
								<div class="tab-pane active" id="tab1">
						      			{{Form::open(array('action'=>'PagesController@postFetch','method'=>'POST'))}}
						      				<div class="input-prepend">
											  <span class="add-on">Plot#</span>
											  {{Form::text('plot_number',null,['class'=>"span6",'placeholder'=>"Plot Number",'required'=>1])}}
											</div>
										<div class="form-actions">
										  <button type="submit" class="btn btn-primary">Get Customer</button>
										  <button  class="cancel btn" data-type="checking" data-containerid="studentChecker">Cancel</button>
										</div>
						      			{{Form::close()}}
								</div>
								<div class="tab-pane" id="tab2">
						      		{{Form::open(array('action'=>'PagesController@postFind','method'=>'POST'))}}
					      				<div class="input-prepend">
					      					<label>Customer Name :</label>
										  	<span class="add-on">First</span>
										  	{{Form::text('pers_fname',null,['class'=>"span2", 'placeholder'=>"name here"])}}
										 	<span class="add-on">Middle</span>{{Form::text('pers_mname',null,['class'=>"span2", 'placeholder'=>"name here"])}}
											<span class="add-on">last</span>{{Form::text('pers_lname',null,['class'=>"span2", 'placeholder'=>"name here"])}}
										</div>
										<hr>
						      			<label>Plot Details :</label>
						      			<div class="input-prepend">
											<span class="add-on">Area</span>
											{{Form::text('plot_size',null,['class'=>"span2", 'placeholder'=>"Enter the land size"])}}
										</div>
						      			<div class="input-prepend">
											<span class="add-on">Location</span>
											{{Form::text('plot_location',null,['class'=>"span2", 'placeholder'=>"PLot address or location"])}}
										</div>
										<div class="form-actions">
											  <button type="submit" class="btn btn-primary">Get Plot</button>
											  <button  class="cancel btn" data-type="checking" data-containerid="studentChecker">Cancel</button>
										</div>
						      		{{Form::close()}}
								</div>
								<div class="tab-pane" id="tab3">
						      			{{Form::open(array('action'=>'PagesController@postTenant','method'=>'POST'))}}
						      				<div class="input-prepend">
						      					<label>Tenant Name :</label>
											  	<span class="add-on">First</span>
											  	{{Form::text('pers_fname',null,['class'=>"span2", 'placeholder'=>"name here"])}}
											 	<span class="add-on">Middle</span>{{Form::text('pers_mname',null,['class'=>"span2", 'placeholder'=>"name here"])}}
												<span class="add-on">last</span>{{Form::text('pers_lname',null,['class'=>"span2", 'placeholder'=>"name here"])}}
											</div>
											<hr>
						      				<label>House Details :</label>
						      				<div class="input-prepend">
											  	<span class="add-on">House#</span>
											  	{{Form::text('hous_number',null,['class'=>"span2", 'placeholder'=>"Enter the house number"])}}
											</div>
											<div class="form-actions">
											  	<button type="submit" class="btn btn-primary">Get Tenant</button>
											  	<button class="cancel btn" data-type="checking" data-containerid="studentChecker">Cancel</button>
											</div>
						      			{{Form::close()}}
								</div>
							</div>
						</div>
	      			</div>
			    </div>
			    {{Form::open(array('route'=>'search.index','method'=>'get'))}}
					<div class="input-append">
						{{ Form::text('q',null,['class'=>'span5','placeholder'=>"seach here",'id'=>"appendedInputButtons",'required'=>1]) }}
						{{ Form::hidden('x',1) }}	
					  	<button class="btn" type="submit" name="type" value="natural">Search</button>
					  	<!-- <button class="btn" type="submit" name="type" value="index">Extreme Search</button> -->
					</div>
				{{Form::close()}}
			</div>
		</div> <!--navbar-inner-->
	</div><!--navbar -->	
</div> <!--acctheda -->
<div class="sidebar">
	<ul>
        <li><a href="{{route('admin.index')}}" class="ui-link"><i class="fa fa-chevron-circle-left"></i>Add Menu</a></li>
        <li><a href="{{route('customers.create')}}" class="ui-link"><i class="fa fa-plus"></i>Customers</a></li>
        <li><a href="{{route('agents.create')}}" class="ui-link"><i class="fa fa-plus"></i>Agents</a></li>
        <!-- <li><a href="{{route('staffs.create')}}" class="ui-link"><i class="fa fa-plus"></i>Staff</a></li> -->
        <!-- <li><a href="{{route('prospectives.create')}}" class="ui-link"><i class="fa fa-plus"></i>Prospectives</a></li> -->
        <!-- <li><a href="{{route('compounds.create')}}" class="ui-link"><i class="fa fa-plus"></i>Compound</a></li> -->
        <!-- <li><a href="{{route('land-lords.create')}}" class="ui-link"><i class="fa fa-plus"></i>Land Lord</a></li> -->
        <li><a href="{{route('tenants.create')}}" class="ui-link"><i class="fa fa-plus"></i>Tenant</a></li>
        <li><a href="{{route('houses.create')}}" class="ui-link"><i class="fa fa-plus"></i>House</a></li>
<!-- 					        <li><a href="#" class="ui-link"><i class="fa fa-shopping-cart"></i> Businesses</a></li>
        <li><a href="#" class="ui-link"><i class="fa fa-music"></i>Entertainment</a></li>
         -->
        <li><a href="#" class="ui-link"><i class="fa fa-cog"></i> Settings</a></li>
    </ul>
</div> <!--sidebar-->