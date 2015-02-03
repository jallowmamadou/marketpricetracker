<!-- Modal -->

<div id="add-to-house" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Add to a house</h3>
  </div>
				{{Form::open( ['route'=> ['tenants.update', $tenant['tent_id'] ] ,'method'=>'PATCH'],['class'=>'form-snippet'] ) }}
					<div class="level name">
							<div>
								{{Form::label('hous_id','Select House')}}
								<select name="hous_id" class="span8">
								<?php if (!empty($newhouse)): ?>
									<?php foreach ($newhouse as $key => $house): ?>
										<option value="{{$house['hous_id']}}">{{$house['hous_number']}}</option>
									<?php endforeach ?>
									<?php else: ?>
									<option value="0">Not Available</option>
								<?php endif ?>
								</select>
								{{Form::hidden('house_add',28)}}
							</div>
					</div>


			<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-primary" name="createUser">Save changes</button>
			</div><!-- end of modal footer -->		
	 {{Form::close()}}
		  </div>
