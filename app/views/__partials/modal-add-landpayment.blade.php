<!-- Modal -->

<div id="landpayment" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Add a new payment</h3>
  </div>
	  {{Form::open(['route'=>['customers.payments.store'],'method'=>'POST'])}}
		  <div class="modal-body">
					<div class="level details">

						<div class="first">

							<div>
								{{Form::label('payment_remark','remarks')}}
								{{Form::text('payment_remark',null,['class'=>'input-xlarge','placeholder'=>'Enter payment remarks'])}}
							</div>
							<div>
								{{Form::label('payment_plot','For Plot')}}
								<select name="payment_plot" id="enit" class="input-xlarge">
									<?php if (!empty($customer['plots'])): ?>
									<?php foreach ($customer['plots'] as $p => $ps): ?>
										<option value="{{$ps['plot_id']}}">{{ucwords($ps['plot_number'])}}</option>	
									<?php endforeach ?>
											
									<?php endif ?>
								</select>
							</div>
						</div>
					</div>
					<div class="level details">
						<span>Monetary </span>
						<hr>
						<div class="first ">
							<div>
								{{Form::label('amount_paid','Amount')}}
								{{Form::number('amount_paid',null,['class'=>'input-xlarge span9','placeholder'=>'Enter the amount paid','step'=>'any','required'=>1])}}
							</div>
						</div>
					</div>
		  </div>
			<div class="modal-footer">
				<?php if (isset( $customer['cust_id'] )): ?>
					{{Form::hidden('customer_id',$customer['cust_id'])}}
				<?php else: ?>
				<?php $cid = Request::segment(2); ?>
					<?php if (!empty($cid) && is_numeric($cid) ): ?>
						{{Form::hidden('customer_id',$cid)}}
					<?php endif ?>
				<?php endif ?>
				
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-primary" name="createUser">Pay Now</button>
			</div><!-- end of modal footer -->		
	 {{Form::close()}}
</div>