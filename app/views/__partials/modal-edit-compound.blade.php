<!-- Modal -->

<div id="edit-compound" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Edit <?php echo (!empty($compound['name']))? ucwords($compound['name']): 'Compound';  ?></h3>
  </div>
  {{Form::model($compound, ['route'=>['compounds.update',$compound['comp_id'] ],'method'=>'PATCH'],['class'=>'form-snippet'])}}
		  <div class="modal-body">				
					<div class="level name">
						<div>
							{{Form::label('comp_landLordID','Change Land Lord')}}
							<select name="comp_landLordID" class="span6">
								<?php if (!empty($ll)): ?>
									<?php foreach ($ll as $key => $value): ?>
										<?php if ($value->id == $compound['comp_landLordID']): ?>
											<option value="{{$value->id}}" selected="selected">{{$value->ll_fullname}}</option>	
										<?php else: ?>
											<option value="{{$value->id}}">{{$value->ll_fullname}}</option>	
										<?php endif ?>
									<?php endforeach ?>								
									<?php else: ?>
									<option>not available</option>	
								<?php endif ?>
							</select>
						</div>
						<div>
							{{Form::label('agendid','Agent Assigned')}}
							<select name="agendid" class="span6">
								<?php if (!empty($agents)): ?>
									<?php foreach ($agents as $key => $value): ?>
										<?php if ($value['agen_id'] == $compound['agendid']): ?>
										<option value="{{$value['agen_id']}}" selected="selected">{{$value['person']['pers_fname'].' '.$value['person']['pers_mname'].' '.$value['person']['pers_lname']}}</option>
										<?php else: ?>
										<option value="{{$value['agen_id']}}">{{$value['person']['pers_fname'].' '.$value['person']['pers_mname'].' '.$value['person']['pers_lname']}}</option>																					
										<?php endif ?>
									<?php endforeach ?>
									<?php else: ?>
									<option>not available</option>
								<?php endif ?>
								
							</select>
						</div>
						<div>
							{{Form::label('name','Property Name')}}
							{{Form::text('name',null,['class'=>'input-xlarge span6','placeholder'=>'Enter property name'])}}
						</div>
						<div>
							{{Form::label('comp_numberOfHouses','Number of houses')}}
							{{Form::text('comp_numberOfHouses',null,['class'=>'input-xlarge span6','placeholder'=>'Compound number of houses'])}}
						</div>
					</div>
					<div class="level name">
						<div>
							{{Form::label('location','Compound location')}}
							{{Form::text('location',null,['class'=>'input-xlarge span6','placeholder'=>'Compound location or Adress'])}}
						</div>
						<div>
							{{Form::label('comp_indentifier','Compound number')}}
							{{Form::text('comp_indentifier',null,['class'=>'input-xlarge span6','placeholder'=>'Compound number or Indentifier'])}}
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