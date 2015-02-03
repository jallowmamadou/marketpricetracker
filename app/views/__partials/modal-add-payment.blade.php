<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-header">
    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    	<h3 id="myModalLabel">Add a new payment</h3>
  	</div>
	  	{{Form::open(array('route'=>'tenants.payments.store'))}}
		  	<div class="modal-body">
				<div class="level details">

					<div class="first">
						<div>
							{{Form::label('payment_type','Type')}}
							<select name="payment_type" id="enit" class="input-xlarge">
								<option>rent</option>
							</select>
						</div>
						<div>
							{{Form::label('payment_remark','remarks')}}
							{{Form::text('payment_remark',null,['class'=>'input-xlarge','placeholder'=>'Enter payment remarks'])}}
						</div>
						<div>
							{{Form::label('payment_house','For house')}}
							<select name="payment_house" id="enit" class="input-xlarge">
								<?php if (!empty($tenant['house'])): ?>
									<option value="{{$tenant['house']['hous_id']}}">{{ucwords($tenant['house']['hous_number'])}}</option>		
								<?php endif ?>
							</select>
						</div>
						<div>
							{{Form::label('date_paid','Date paid')}}
							{{Form::date('date_paid',['class'=>'input-xlarge','placeholder'=>'Enter date of payment','required'=>1])}}
						</div>
					</div>
				</div>
				@if(!empty($rent))
					<div class="level details">
						<span>History </span>
						<hr>
						<div class="first ">
							@if(!empty($rent['rent_lastpaydate']))
							<div>
								{{Form::label('date_paid','Last payment date')}}
								<span class="input-xlarge uneditable-input">{{$rent['rent_lastpaydate']}}</span>
							</div>
							@endif
							@if(!empty($rent['rent_nextpaydate']))
							<div>
								{{Form::label('next_due_Date','Last payment due date')}}
								<span class="input-xlarge uneditable-input">{{$rent['rent_nextpaydate']}}</span>
							</div>
							@endif
						</div>
						<div class="first">
						@if(!empty($rent['rent_monthlyFee']))
							<div>
								{{Form::label('last_amount_paid','Monthly Fee')}}
								<span class="input-xlarge uneditable-input">{{$rent['rent_monthlyFee']}}</span>
							</div>
						@endif
						@if(!empty($rent['rent_balance']))
							<div>
								{{Form::label('due_balance','Rent balance')}}
								<span class="input-xlarge uneditable-input">{{$rent['rent_balance']}}</span>
							</div>
						@endif
						</div>
					</div>
				@endif
				<div class="level details">
					<span>Monetary </span>
					<hr>
					<div class="first ">
						<div>
							{{Form::label('amount_paid','Amount')}}
							{{Form::number('amount_paid',null,['class'=>'input-xlarge','placeholder'=>'Enter the amount paid','step'=>'any','required'=>1])}}
						</div>
						<div>
							{{Form::label('number_months','For how many months')}}
							{{Form::number('number_months',null,['class'=>'input-xlarge','placeholder'=>'Enter number of months only when needed','step'=>'any','required'=>1])}}
						</div>
					</div>
				</div>
		  	</div>
			<div class="modal-footer">
				<?php if (isset($tenant['tent_id'])): ?>
					{{Form::hidden('tent_id',$tenant['tent_id'])}}
				<?php endif ?>
				
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-primary" name="createUser">Save changes</button>
			</div><!-- end of modal footer -->		
	 {{Form::close()}}
</div>