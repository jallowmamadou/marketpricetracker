<!-- Modal -->

<div id="add-user" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Create A user</h3>
  </div>
	  {{Form::open(array('route'=>'users.store'))}}
		  <div class="modal-body">
				<strong>
						Fullname
				</strong>														
				<div class="input-feild">
					<input id="fullname" type="text" placeholder="Enter your Fullname" name="username" class="span5" required>
					<span class="help-block">Enter your fullname </span>
				</div>
				<strong>
						Email
				</strong>														
				<div class="input-feild">
					<input id="email" type="email" placeholder="email address" name="email" class="span5"  data-validation="email" required>
				</div>
				<!-- <hr> -->
				<strong>
						Password
				</strong>														
				<div class="input-feild">
					<input id="password" type="password" placeholder="enter new password" name="password" class="span5" data-validation="strength" 
						data-validation-strength="2" required>
					<span class="help-block">minimum is 6 characters</span>									
				</div>
				<!-- <hr> -->
				<strong>
						Mobile Phone
				</strong>														
				<div class="input-feild">
					<input type="text" name="mobile" id="mobile" placeholder="fullname"  class="span5" data-validation="number">
					<span class="help-block">example 7052217</span>

				</div>
			<hr>
				<strong>
						Account Type
				</strong>														
				<div class="input-feild">
					<select name="accountType" id="accountType" class="span5" >
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
				<select name="Previleges" id="accountPriv" class="span5">
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
					  {{Form::number('security_level',null,['class'=>"span4",'placeholder'=>"only numbers allowed",'max'=>8,'required'=>1])}}
					</div>
					<span class="help-block">Access on how the user manipulate assignment data</span>
				</div>	

		  </div>
			<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-primary" name="createUser">Save changes</button>
			</div><!-- end of modal footer -->		
	 {{Form::close()}}
</div>