@section('styles')
    {{ HTML::style('css/scheme.css') }}
@stop
@section('header')
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <div class="navbar-brand" id="comenu">
           <a href="#" id="company_logo">
             <span>Company properties</span>
            </a>
            <a href="#" id="triger"><span class="octicon octicon-three-bars"></span></a>                   
            </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                      </ul>
            <ul class="nav navbar-nav  navbar-right" id="userdrop">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">

                      <img src="img/login_bg.jpg" title="user impage" class="img-circle"> Dropdown <span class="caret"></span>   

                    
                    </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
             </ul>
        </div>
      </div>
    </nav>
</header>
@stop
@section('sidebar')
<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar userbrief" >
      <li class="department">
          <strong>
              Department <span class="sr-only">(current)</span>
          </strong>                                        
      </li>
      <li>
          <strong>
              admin
          </strong>                   
      </li>
      <li class="thumber">
              <img src="img/login_bg.jpg" alt="user name here" class="img-circle">
      </li>
      <li>
          User fullname
      </li>
      <li class="cons">
          <a href="#">
              <span class="octicon octicon-broadcast"></span>
          </a>
          <a href="#">
              <span class="octicon octicon-gear"></span>
          </a>
      </li>
  </ul>
  <ul class="nav nav-sidebar" id="snav">
    <li>
        <a href="#">
            <span class="octicon octicon-organization"></span>
            <span>customers</span>
        </a>
    </li>
    <li>
        <a href="">
            <span class="octicon octicon-location"></span>
            <span>plots</span>
        </a>
      </li>
    <li>
        <a href="">
            <span class="octicon octicon-diff-ignored"></span>
            <span>compounds</span>                             
        </a>
      </li>
    <li>
        <a href="">
            <span class="octicon octicon-unfold"></span>
            <span> transactions</span>

        </a>
      </li>
  </ul>
  <ul class="nav nav-sidebar">
    <li><a href=""><span class="octicon octicon-versions"></span> <span>
        Menu view</span></a></li>
  </ul>
  </div>
@stop
@section('footer')
  @include('__partials/footer')
@stop