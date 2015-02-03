@include('templates/top-admin')
@section('content')
@include('__partials/modal-edit-password')
	<div class="cc">
		<h4>User Account</h4>
		<hr>
  {{Form::model($user,array('method'=>'PATCH','route'=>['users.update',$user['id']]))}}			

								<strong>
										Email
								</strong>														
								<div class="input-feild">
									<span class="input-xlarge uneditable-input span5">{{$user['email']}}</span>
								</div>	
								 <a href="#change-password" role="button" data-toggle="modal">Change Password</a>
									<hr>
								<strong>
										Assign Access code
								</strong>														
								<div class="input-feild">
									{{Form::text('accessCode',null,['class'=>"span5",'Enter access code here'])}}
								</div>	
								<hr>														
		<div class="modal-footer">
			{{Form::hidden('user_id',$user['id'])}}
				<button class="btn" data-dismiss="modal" aria-hidden="true" type="reset">Reset Defaults</button>
				<button class="btn btn-primary" name="createUser">Save changes</button>
		</div><!-- end of modal footer -->			  
 {{Form::close()}}

	</div>
	<div class="cc">
		<h4>User Preferences</h4>
		<hr>
  {{Form::model($user['role'],array('method'=>'PATCH','route'=>['users.update',$user['id']]))}}			
								<strong>
										Fullname
								</strong>														
								<div class="input-feild">
									{{Form::text('fullname',null,['class'=>"span5"])}}
									<span class="help-block">Enter your fullname </span>
								</div>
			<hr>
				<strong>
						Account Type
				</strong>														
				<div class="input-feild">
					<select name="userGroup" id="accountType" class="span5" >
					<option value="{{$user['role']['userGroup']}}">{{$user['role']['userGroup']}}</option>
					<option>admin</option>
					<option>agent</option>
					<option>rent</option>
					<option>staff</option>
				</select>
					<span class="help-block">The information system that the user is assign to</span>
				</div>
				<hr>
				<strong>
						Previleges
				</strong>														
				<div class="input-feild">
				<select name="privileges" id="accountPriv" class="span5">
					<option value="{{$user['role']['privileges']}}">{{$user['role']['privileges']}}</option>
					<option value="veda">view edit add and delete</option>
					<option value="ve">view and edit</option>
					<option value="v">view</option>
				</select>	
					<span class="help-block">Access on how the user manipulate assignment data</span>
				</div>	

				<hr>
				<strong>
						Security Level
				</strong>														
				<div class="input-feild">
					<div class="input-prepend">
					  <span class="add-on">Level</span>
{{Form::number('security_level',null,['class'=>"span4",'placeholder'=>"only numbers allowed",'max'=>8,'value'=>$user['role']['security_level'],'required'=>1])}}
					</div>
					<span class="help-block">Access on how the user manipulate assignment data</span>
				</div>				
		<div class="modal-footer">
			{{Form::hidden('userRole_id',$user['role']['id'])}}
				<button class="btn" data-dismiss="modal" aria-hidden="true" type="reset">Reset Defaults</button>
				<button class="btn btn-primary" name="createUser">Save changes</button>
		</div><!-- end of modal footer -->			  
 {{Form::close()}}
	</div>
@stop
@include('templates/bottom-admin')