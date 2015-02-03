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
                <a href="">Register an Account</a>
      </div>
      </form> 
@stop
