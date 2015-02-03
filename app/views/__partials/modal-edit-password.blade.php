<!-- Modal -->

<div id="change-password" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Change Password</h3>
  </div>
  {{Form::model($user,array('method'=>'PATCH','route'=>['users.update',$user['id']]))}}			
		<div class="modal-body">
		<strong>
				Email
		</strong>														
		<div class="input-feild">
			<span class="input-xlarge uneditable-input span5">{{$user['email']}}</span>
		</div>	
			<hr>
		<strong>
				New password
		</strong>														
		<div class="input-feild">
			{{Form::password('password',null,['class'=>"span5",'Enter access code here'])}}
		</div>	
		<hr>														
		{{Form::hidden('change_password',$user['id'])}}
		<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button class="btn btn-primary" name="createUser">Save changes</button>
		</div><!-- end of modal footer -->		

		</div>

	 {{Form::close()}}
</div>
