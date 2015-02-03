<!-- Modal -->

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Add a new payment</h3>
  </div>
	  {{Form::open(array('route'=>'paying.store'))}}
		  <div class="modal-body">
					<div class="level details">
						<div class="first">
							<div>
								{{Form::label('type','Type')}}
								<select name="type" id="enit" class="input-xlarge">
									<option>income</option>
									<option>expense</option>
								</select>
							</div>
							<div>
								{{Form::label('paid_for','For')}}
								<select name="paid_for" id="enit" class="input-xlarge">
									<optgroup label="Incomes">
										<option value="rent">Rent</option>
										<option value="mortgage">Mortgage</option>
										<option value="salescommision">Sales Commision</option>
									</optgroup>
									<optgroup label="Expenses">
										<option value="exp_cashpower">Cash Power</option>
										<option value="exp_carservice">Car Service</option>
										<option value="exp_advertising">advertising</option>
										<option value="exp_salary">Salary</option>
										<option value="exp_tax">Tax</option>
										<option value="exp_commission">Commission</option>
										<option value="exp_drawings">Drawings</option>
										<option value="exp_fuel">Fuel</option>
										<option value="exp_far">Fare</option>
										<option value="exp_rent">rent</option>
									</optgroup>
								</select>
							</div>
							<div>
								{{Form::label('customer','Customer')}}
								{{Form::text('customer',null,['class'=>'input-xlarge','placeholder'=>'Enter customer name', 'required'=>1])}}
							</div>
							<div>
								{{Form::label('house_plot_num','House or plot #')}}
								{{Form::text('house_plot_num',null,['class'=>'input-xlarge','placeholder'=>'Enter house or plot number', 'required'=>1])}}
							</div>

							<div>
								{{Form::label('date_paid','Date')}}
								{{Form::date('date_paid',['required'=>1])}}
							</div>
							<div>
								{{Form::label('locationOrProperty','Location/property')}}
								{{Form::text('locationOrProperty',null,['class'=>'input-xlarge','placeholder'=>'Enter Location or property'])}}
							</div>
							<div>
								{{Form::label('description','Description')}}
								{{Form::text('description',null,['class'=>'input-xlarge','placeholder'=>'Description'])}}
							</div>
							<div>
								{{Form::label('ref','Ref #')}}
								{{Form::text('ref',null,['class'=>'input-xlarge','placeholder'=>'reference number'])}}
							</div>

						</div>
					</div>

					<div class="level details">
						<span>Monetary </span>
						<hr>
						<div class="first ">
							<div>
								{{Form::label('amount','Amount')}}
								{{Form::number('amount',null,['class'=>'input-xlarge span8','placeholder'=>'Enter Amount being paid','step'=>'any', 'required'=>1])}}
							</div>
						</div>
					</div>
		  </div>
			<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-primary" name="createUser">Save changes</button>
			</div><!-- end of modal footer -->		
	 {{Form::close()}}
</div>