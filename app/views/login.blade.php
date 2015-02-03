@include('templates/login')
@section('content')
    <div class="form-signin loging">
        <div class="col-xs-4 col-sm-6 col-md-8 col-lg-10"><!--  remove the placeholder class-->
              <img data-src="holder.js/200x200/auto/sky" class="lcircle img-responsive img-circle" alt="200x200" src="imgs/logo.jpg" data-holder-rendered="true">


        <div class="text-danger" style="display:none">
        <hr>
            <p >erros come here</p>

        </div>               
        </div>
       

    </div>

    <form action="http://localhost/ace.app/public/login" method="post" class="form-signin" role="form" id="signin">
        <input type="email" class="form-control" placeholder="Email address" required="" autofocus="">
        <input type="password" class="form-control" placeholder="Password" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

        <div class="access">
                <a href="">create a user</a>
                <a href="#">&#9679;</a>
                <a href="">daily registration</a>
      </div>
      </form> 
@stop
