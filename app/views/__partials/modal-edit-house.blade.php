<!-- Modal -->

<div id="edit-house" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Edit house</h3>
  </div>
{{Form::model($house,['route'=>[ 'houses.update', $house['hous_id'] ], 'method'=>'PATCH'],['class'=>'form-snippet'])}}
		  <div class="modal-body">
				
					<div class="level name">

						<div>
							{{Form::label('hous_number','House number')}}
							{{Form::text('hous_number',null,['class'=>'input-xlarge span6','placeholder'=>'House Number'])}}
						</div>
						<div>
							{{Form::label('hous_numberOfrooms','Number of rooms')}}
							{{Form::text('hous_numberOfrooms',null,['class'=>'input-xlarge span6','placeholder'=>'number of rooms'])}}
						</div>
					</div>
					<div class="level name">
						<div>
							{{Form::label('hous_price','Price')}}
							{{Form::text('hous_price',null,['class'=>'input-xlarge span6','placeholder'=>'House price per month'])}}
						</div>
						<div>
							{{Form::label('hous_advance','Advance Amount')}}
							{{Form::text('hous_advance',null,['class'=>'input-xlarge span6','placeholder'=>'Advance payment'])}}
						</div>
					</div>
					<div class="level name">
						<div>
							{{Form::label('hous_compoundID','Compound')}}
							<select class="span6" name="hous_compoundID">
								<?php foreach ($compounds as $key => $value): ?>
									<?php if ($value['comp_id'] == $house['hous_compoundID'] ): ?>
									<option value="{{$value['comp_id']}}" selected="selected">
										{{$value['comp_indentifier']}}
									</option>	
									<?php else: ?>
									<option value="{{$value['comp_id']}}">
										{{$value['comp_indentifier']}}
									</option>																			
									<?php endif ?>

								<?php endforeach ?>
							</select>
						</div>


					</div>
					<div class="level">
						<div>
							{{Form::label('hous_description','Description')}}
							{{Form::textarea('hous_description',null,['class'=>'input-xlarge span6','placeholder'=>'Enter your Description here'])}}
						</div>
					</div>

			</div>
			<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-primary" name="createUser">Save changes</button>
			</div><!-- end of modal footer -->		
	 {{Form::close()}}
		  </div>
