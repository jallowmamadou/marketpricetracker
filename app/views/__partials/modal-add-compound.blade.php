<!-- Modal -->

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Add a new Property</h3>
  </div>
  {{Form::open(['route'=>'compounds.store'],[],['class'=>'form-snippet'])}}
		  <div class="modal-body">
				
					<div class="level name">

						<div>
							{{Form::label('ll_id','Land Lord')}}
							<select name="ll_id" class="span6">
								<option>not available</option>
							</select>
						</div>
						<div>
							{{Form::label('prop_name','Property Name')}}
							{{Form::text('prop_name',null,['class'=>'input-xlarge span6','placeholder'=>'Enter property name','step'=>'any'])}}
						</div>
						<div>
							{{Form::label('comp_houses','Number of houses')}}
							{{Form::number('comp_houses',null,['class'=>'input-xlarge span6','placeholder'=>'Compound number of houses','step'=>'any'])}}
						</div>
					</div>
					<div class="level name">
						<div>
							{{Form::label('comp_location','Compound location')}}
							{{Form::text('comp_location',null,['class'=>'input-xlarge span6','placeholder'=>'Compound location or Adress'])}}
						</div>
						<div>
							{{Form::label('comp_number','Compound number')}}
							{{Form::text('comp_number',null,['class'=>'input-xlarge span6','placeholder'=>'Compound number or Indentifier'])}}
						</div>
					</div>
					<div class="level">
						<div>
							{{Form::label('comp_remarks','Compound Remarks')}}
							{{Form::textarea('comp_remarks',null,['class'=>'input-xlarge span6','placeholder'=>'Enter your remarks here'])}}
						</div>
					</div>
		  </div>
			<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-primary" name="createUser">Save changes</button>
			</div><!-- end of modal footer -->		
	 {{Form::close()}}
</div>