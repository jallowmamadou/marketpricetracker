<?php #testing new the dynamic navigator

 ?>
@include('templates/login')
@section('content')

    <div class="form-signin loging">
        <div class="col-xs-4 col-sm-6 col-md-8 col-lg-10"><!--  remove the placeholder class-->
              <img data-src="holder.js/200x200/auto/sky" class="lcircle img-responsive img-circle" alt="200x200" src="200x200/auto/sky" data-holder-rendered="true">

        <div class="text-danger" style="display:none">
        <hr>
            <p >erros come here</p>

        </div>               
        </div>
    
    </div>

    <form action="{{route('login_path')}}" method="post" class="form-signin" role="form" id="signin">
        <input type="tel" class="form-control" placeholder="phone number" required="" autofocus="" name="phone" required>
        <input type="password" class="form-control" placeholder="Password" required="" name="password">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

        <div class="access">
            <a href="#create_user" data-toggle="modal" data-target="#create_user"><span class="octicon octicon-plus"></span> Register new Account</a>
      </div>
    </form> 

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="create_user" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Create a new account</h4>
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
                  <div class="input-group-addon">Phone </div>
                  <input placeholder="Enter phone number" name="phone" type="text" class="form-control">
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
               Account Details:
            </label>
            <hr>
              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">Name </div>
                    <input  placeholder="Business name " name="name" type="text" class="form-control">
                </div>            
              </div>
              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">location </div>
                  <input  placeholder="Where are you located ?" name="location" type="text" class="form-control">
                </div>            
              </div>
              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">Seller Type </div>
                  <select name="user_type" id="userGroup" class="form-control" >
                    <option value="farmer">Farmer</option>
                    <option value="supplier">Supplier</option>
                    <option value="vendor">Vendor</option>
                </select>
                </div>            
              </div>
            </div>
          <div class="form-group">
            <label class="control-label">
             Personal Details:
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
                  <div class="input-group-addon">Email </div>
                    <input  placeholder="name here" name="email" type="email" class="form-control">

                </div>            
              </div>
              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">Phone #</div>
                  <input  placeholder="phone(s) numbers" name="phones" type="text" class="form-control">
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
        <button type="submit" class="btn btn-primary">Create Account</button>
      </div>
     {{Form::close()}}


    </div>
  </div>
</div>

@stop
