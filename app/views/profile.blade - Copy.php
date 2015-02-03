@include('templates/profile')
@section('content')
      <div class="row">

        <div class="main_content col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
            <div class="fetcher row">
                <nav class="navbar">
                    <div class="container-fluid">
                        <div id="navbar" class="navbar-collapse">
                             <ul class="nav navbar-nav">
                                  <li>
                                    <a href="#" id="checker">checking</a>
                                  </li>
                                  <li class="searcher">
                                    <form action="" method="get" class="navbar-form">
                                      <input type="text" name="q" placeholder="search here ..." autofocus>
                                       <button class="octicon octicon-search"></button>
                                    </form>
                                  </li>
                                  <li>
                                    <a href="#"><span class="octicon octicon-zap"></span></a>
                                  </li>
                                  <li>
                                    <a href="#"><span class="octicon octicon-dashboard"></span> <span class="badge">42</span></a>
                                  </li>
                            </ul> 
                        </div>                         
                    </div>
                </nav> 
                              <div class="popover bottom" id="check">
                                    <div class="arrow"></div>
                                    <h3 class="popover-title">Checking</h3>

                                    <div class="popover-content">
<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-justified" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Plot</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Customer</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Tenant</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
      
      <form method="POST" action="http://solid.dev.app/page/fetch" accept-charset="UTF-8">
        <hr>
        <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">PLOT NUMBER (enter to search)</label>
          <div class="input-group">
            <div class="input-group-addon">Plot # </div>
            <input type="text" class="form-control" placeholder="plot numbers">
          </div>
        </div>
        <hr>
        <div class="form-actions">
          <button type="submit" class="btn btn-primary">Get Customer</button>
          <button class="cancel btn" data-type="checking" data-containerid="studentChecker">Cancel</button>
        </div>
      </form>      

    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
          <form method="POST" action="http://solid.dev.app/page/find" accept-charset="UTF-8" class="form-inline">
            <hr> <label class="clearfix">Customer Name :</label>
            <div class="form-group">
             
              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">First </div>
                  <input  placeholder="name here" name="pers_fname" type="text" class="form-control">
                </div>            
              </div>

              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">Middle </div>
                  <input  placeholder="name here" name="pers_mname" type="text" class="form-control">
                </div>            
              </div>


              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">last </div>
                  <input  placeholder="name here" name="pers_lname" type="text" class="form-control">
                </div>            
              </div>

            </div>
            <hr><label class="clearfix">Plot Details :</label>
            <div class="form-group">
              
              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">Area </div>
                  <input  placeholder="name here" name="pers_fname" type="text" class="form-control">
                </div>            
              </div>

              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">Location </div>
                  <input  placeholder="name here" name="pers_mname" type="text" class="form-control">
                </div>            
              </div>


            </div>
            <hr>                
            <div class="form-actions">
              <button type="submit" class="btn btn-primary">Get Plot</button>
              <button class="cancel btn" data-type="checking" data-containerid="studentChecker">Cancel</button>
            </div>
          </form>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
      <form method="POST" action="http://solid.dev.app/page/tenant" accept-charset="UTF-8" class="form-inline">

            <hr><label class="clearfix">Tenant Name :</label>
            <div class="form-group">
              
              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">First </div>
                  <input  placeholder="name here" name="pers_fname" type="text" class="form-control">
                </div>            
              </div>

              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">Middle </div>
                  <input  placeholder="name here" name="pers_mname" type="text" class="form-control">
                </div>            
              </div>


              <div class="sek">
                <div class="input-group">
                  <div class="input-group-addon">last </div>
                  <input  placeholder="name here" name="pers_lname" type="text" class="form-control">
                </div>            
              </div>

            </div>
          <hr>

            <div class="form-group">
              
              <div class="input-group">
                <div class="input-group-addon">House # </div>
                <input type="text" placeholder="Enter the house number" name="hous_number"  class="form-control col-sm-7 control-label">
              </div>
            </div>

            <hr>


        <div class="form-actions">
        <button type="submit" class="btn btn-primary">Get Tenant</button>
        <button class="cancel btn" data-type="checking" data-containerid="studentChecker">Cancel</button>
        </div>
      </form>
    </div>
  </div>

</div>

                                    </div>
                              </div>          
            </div>
            <nav class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Library</a></li>
                  <li class="actisve">Data</li>
                </ol>
            </nav>
            <div class="loader">
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
            </div>
            <div class="main cc">
                         
                
                <div class="panel panel-info" id="profile_panel">
                      <div class="panel-heading clearfix">
                        <h3 class="panel-title">Panel title</h3>

                        <div class="btn-group fiet">
                          <a href="" class="sbm dropdown-toggle" class="" type="button" data-toggle="dropdown" aria-expanded="false">
                            <span class="octicon octicon-three-bars"></span>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>



                      </div>
                      <div class="panel-body">
                          <div class="user-image">
                                <div class="profile_overlay"></div>
                                <div class="user_info">
                                    <div class="thumber">
                                        <img src="img/login_bg.jpg" alt="user name here" class="img-circle midsize">
                                    </div>
                                    <h3>Jane Doe</h3>
                                    <p>Project Manager</p>
                                </div>                         
                          </div>
                          <div class="profile_nav">
                            <nav class="navbar-collapse">
                                <ul class="nav navbar-nav">
                                            <li class="active"><a href="#">Home</a></li>
                                            <li><a href="#about">About</a></li>
                                            <li><a href="#contact">Contact</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                               Dropdown <span class="caret"></span>   
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
                              </nav>
                          </div>
                      </div>
                    </div>                
                <div class="col3 clearfix">
                    <div class="abox col-md-4 col-sm-6">
                         <div class="panel panel-info">
                              <div class="panel-heading">
                                <h3 class="panel-title">General information</h3>
                              </div>
                              <div class="panel-body">
                                <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td>Fullname:</td>
                                                            <td>Manjang  Kunda</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Birth day:</td>
                                                            <td>1965-01-01 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gender:</td>
                                                            <td> Male </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nationality:</td>
                                                            <td> Gambia, The </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ethniticity:</td>
                                                            <td> Mandinka </td>
                                                        </tr>
                                                        <tr>
                                                            <td>National ID's:</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                </div>
                                  <hr>
                                  <a href="#"> something </a>
                              </div>
                            </div>                       
                    
                    </div>

                    
                    <div class="abox col-md-4 col-sm-6">
                         <div class="panel panel-info">
                              <div class="panel-heading">
                                <h3 class="panel-title">Bio</h3>
                              </div>
                              <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                  <hr>
                                  <a href="#"> something </a>
                              </div>
                            </div>                       
                    
                    </div>
                    
                    
                    
                    <div class="abox col-md-4 col-sm-12">
                         <div class="panel panel-info">
                              <div class="panel-heading">
                                <h3 class="panel-title">Bio</h3>
                              </div>
                              <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                  <hr>
                                  <a href="#"> something </a>
                              </div>
                            </div>                       
                    
                    </div>
                    
                    
                    
                    

                </div>

                
                
                
                
                
                <div class="panel panel-info">
                      <div class="panel-heading">
                        <h3 class="panel-title">Location</h3>
                      </div>
                      <div class="panel-body">
                          <div class="table-responsive">
                             <table class="table">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>First Name</th>
                                      <th>Last Name</th>
                                      <th>Username</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td>@mdo</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">2</th>
                                      <td>Jacob</td>
                                      <td>Thornton</td>
                                      <td>@fat</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">3</th>
                                      <td>Larry</td>
                                      <td>the Bird</td>
                                      <td>@twitter</td>
                                    </tr>
                                  </tbody>
                                </table>                         
                          
                          </div>

                          <hr>
                          <a href="#"> something </a>
                      </div>
                    </div> 
            </div>

        </div>
      </div><!-- End of .row -->
@stop