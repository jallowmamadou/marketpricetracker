<!-- Modal -->

<div id="add-Apot" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Pick a plot</h3>
  </div>
				{{Form::open( ['route'=> ['agents.update', $agent['agen_id'] ] ,'method'=>'PATCH'],['class'=>'form-snippet'] ) }}
					<div class="level name">
							<div>
								{{Form::label('plot_ID','Plot number')}}
								<select name="plot_ID" class="span8">
								<?php if (!empty($unassigned)): ?>
									<?php foreach ($unassigned as $key => $plot): ?>
										<option value="{{$plot['plot_id']}}">{{$plot['plot_number']}}</option>
									<?php endforeach ?>
									<?php else: ?>
									<option value="0">Not Available</option>
								<?php endif ?>
								</select>
								{{Form::hidden('cross',28)}}
							</div>
					</div>


			<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-primary" name="createUser">Save changes</button>
			</div><!-- end of modal footer -->		
	 {{Form::close()}}
		  </div>
