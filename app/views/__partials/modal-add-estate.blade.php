<!-- Modal -->

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Add a new Estate</h3>
  </div>
  {{Form::open(['route'=>'estates.store'],[],['class'=>'form-snippet'])}}
		  <div class="modal-body">
				
					<div class="level name">

						<div>
							{{Form::label('est_name','Estate name')}}
							{{Form::text('est_name',null,['class'=>'input-xlarge span6','placeholder'=>'Enter estate name'])}}
						</div>
						<div>
							{{Form::label('est_location','Location')}}
							{{Form::text('est_location',null,['class'=>'input-xlarge span6','placeholder'=>'Enter location'])}}
						</div>
					</div>
		  </div>
			<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-primary" name="createUser">Save changes</button>
			</div><!-- end of modal footer -->		
	 {{Form::close()}}
</div>