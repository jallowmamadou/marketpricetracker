@include('templates/profile')
@section('content')
<div class="row">
  <div class="main_content col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
    @include('__partials/fetch')
    @include('__partials/breadcrumb')
    @include('__partials/loader')
    <div class="main cc">                                     
    @include('__partials/user_profile_panel')              
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