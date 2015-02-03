<!-- Modal -->

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Add a new house</h3>
  </div>
{{Form::open(['route'=>'houses.store'],[],['class'=>'form-snippet'])}}
		  <div class="modal-body">
				
					<div class="level name">

						<div>
							{{Form::label('house_number','House number')}}
							{{Form::text('house_number',null,['class'=>'input-xlarge span6','placeholder'=>'House Number'])}}
						</div>
						<div>
							{{Form::label('room_number','Number of rooms')}}
							{{Form::number('room_number',null,['class'=>'input-xlarge span6','placeholder'=>'number of rooms','step'=>'any'])}}
						</div>
					</div>
					<div class="level name">
						<div>
							{{Form::label('house_price','Price')}}
							{{Form::text('house_price',null,['class'=>'input-xlarge span6','placeholder'=>'House price per month'])}}
						</div>
						<div>
							{{Form::label('house_advance','Advance Amount')}}
							{{Form::number('house_advance',null,['class'=>'input-xlarge span6','placeholder'=>'Advance payment','step'=>'any'])}}
						</div>
					</div>
					<div class="level name">
						<div>
							{{Form::label('house_compound','Compound')}}
							<select class="span6" name="house_compound">
								<option value="0">compounds</option>
								<?php
								 $comps = Compound::all();
								 $compounds = ($comps)? $comps->toArray() : [];
								  ?>
								<?php foreach ($compounds as $key => $value): ?>
									<option value="{{$value['comp_id']}}">
										{{$value['comp_indentifier']}}
									</option>
								<?php endforeach ?>
							</select>
						</div>


					</div>
					<div class="level">
						<div>
							{{Form::label('house_descriptions','Description')}}
							{{Form::textarea('house_remarks',null,['class'=>'input-xlarge span6','placeholder'=>'Enter your Description here'])}}
						</div>
					</div>

			</div>
			<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-primary" name="createUser">Save changes</button>
			</div><!-- end of modal footer -->		
	 		{{Form::close()}}
		  </div>
