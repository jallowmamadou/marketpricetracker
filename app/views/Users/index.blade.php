@include('templates/dashboard')
@section('content')
  <div class="main_content col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
    @include('__partials/fetch')
    @include('__partials/breadcrumb')
    @include('__partials/loader')
    <div class="main cc">  

        <div class="panel panel-info">
              <div class="panel-heading clearfix">
                <h3 class="panel-title">Users Table</h3>
                <div class="btn-group fiet">
                  <a href="" class="sbm dropdown-toggle" class="" type="button" data-toggle="dropdown" aria-expanded="false">
                    <span class="octicon octicon-three-bars"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-right" role="menu">
                    <li><a href="#">create a user</a></li>
                    <li><a href="#">block users</a></li>
                    <li><a href="#">Logout users</a></li>
                    <li><a href="#">download user list</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Delete</a></li>
                  </ul>
                </div>
              </div>
              <div class="panel-body">
<div class="table-responsive"> 
<table class="table table-condensed"> 

</table>
</div>
              </div>
              <hr>
              <div class="line">  
                  <a href="#create_user" data-toggle="modal" data-target="#create_user"><span class="octicon octicon-plus"></span></a> |
                  <a href="#"><span class="octicon octicon-checklist"></span></a> |
                  <a href="#"><span class="octicon octicon-issue-reopened"></span></a> |
                  <a href="#"><span class="octicon octicon-lock"></span></a> |
                  <a href="#"><span class="octicon octicon-database"></span></a> 
              </div>  
            </div>                
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="create_user" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Create a new user</h4>
      </div>
      {{Form::open(array('route'=>'registration.store','files' => true, 'class'=>"form-inline",'id'=>"user_form"))}}
      <div class="modal-body">
          <div class="form-group">
            <label class="control-label">
              Login Details:
            </label>
            <hr>
              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">Email </div>
                  <input  placeholder="Enter email address" name="phone" type="text" class="form-control">
                </div>            
              </div>
              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">Password </div>
                  <input  placeholder="Enter new password" name="password" type="password" class="form-control">
                </div>            
              </div>
            </div>
          <div class="form-group">
            <label class="control-label">
              Roles:
            </label>
            <hr>
              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">Domain </div>
                  <select name="domain" id="accountType" class="form-control" >
                    <option value="Admin">Administration</option>
                    <option value="Estate">Reals Estate</option>
                    <option value="Rent">Rent</option>
                    <option value="Accounts">Accounts</option>
                  </select>
                </div>            
              </div>
              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">Security Level </div>
                  <input  placeholder="name here" name="security_level" type="number" class="form-control" max="8" min="1" step="1">
                </div>            
              </div>
              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">User Group </div>
                  <select name="user_group" id="userGroup" class="form-control" >
                    <option value="Staff">Staff</option>
                    <option value="Agent">Agent</option>
                    <option value="Accountant">Accountant</option>
                    <option value="Manager">Manager</option>
                    <option value="Other">Other</option>
                </select>
                </div>            
              </div>
            </div>
          <div class="form-group">
            <label class="control-label">
              User Properties:
            </label>
            <hr>
              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">Firstname </div>
                  <input  placeholder="name here" name="first_name" type="text" class="form-control">
                </div>            
              </div>
              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">Last name </div>
                  <input  placeholder="name here" name="last_name" type="text" class="form-control">
                </div>            
              </div>
              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">Department </div>
                  <select name="department" id="department" class="form-control" >
                    <option value="Admin">Administration</option>
                    <option value="Estate">Reals Estate</option>
                    <option value="Rent">rent</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Accounts">Accounts</option>
                  </select>

                </div>            
              </div>
              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">Phone #</div>
                  <input  placeholder="name here" name="phones" type="text" class="form-control">
                </div>            
              </div>
              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">Photo</div>
                  <input placeholder="name here" name="profilePic" type="file" class="form-control">
                </div>            
              </div>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Create User</button>
      </div>
     {{Form::close()}}


    </div>
  </div>
</div>

        
    </div> <!-- main cc -->
  </div> <!-- main_conent-->
@stop