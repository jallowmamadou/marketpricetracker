<?php #page specific processing
    $address = [];
    $person = [];
    $contacts = [];
    $plot = [];
    if(isset($data) && !empty($data)):
    endif;
 ?>
@include('templates/top-admin')
@section('content')
   <div class="scope">
        <div class="hedacont">
            <div class="navbar">
                <div class="navbar-inner" id="scopebar">
                    <div class="container">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target="navbar-responsive-collapse">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </a>
                        <a class="brand" href="">Customer Name : {{ucwords("{ 'fullname' }")}}</a>
                        <div class="nav-collapse collapse navbar-responsive-collapse">
                          <ul class="nav">  
                          	<li><a href="#index">General</a> </li>
                          	<li><a href="#transactions">Transactions</a> </li>
                          	<li><a href="#">Edit</a> </li>
                           </ul>
                        </div><!-- /.nav-collapse -->
                    </div>
                </div><!-- /navbar-inner -->
            </div> 
            <div class="c-header">
                <ul class="thumbnails" id="thmb">
                    <li class="span2">
                      <a href="#" class="thumbnail">
                        <img src="http://lorempixel.com/g/200/200/" data-src="holder.js/300x200" alt="">
                      </a>
                    </li>
                </ul>  
            </div>           
        </div>  
    </div>  <!-- end of scope -->
    <div  id="index"></div>
	<div class="cc">
        <!-- <hr> -->

    	<div>
        <hr>
    		<div class="aside bio">
                <div class="ch">
                    <h4 id="bio">Bio</h4>
                </div>
                <hr>
                <div class="details">
                    <div class="aside left span8">
                        <center>
                            <strong>THE NAME HERE</strong>
                            <hr>
                            <div class="thumbnail span3 thm">
                                <img src="http://lorempixel.com/g/200/200/" data-src="holder.js/300x200" alt="">
                            </div>
                            <hr>
                            <div class="row">
                                <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="3">General information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Fullname:</td>
                                            <td>{{ucwords('$fullname')}}</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Birth day:</td>
                                            <td>{{ucwords('ssagfaga')}} </td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td> {{ucwords('agfag')}} </td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Nationality:</td>
                                            <td> {{ucwords('asgafa')}} </td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Ethniticity:</td>
                                            <td> {{ucwords('adfadfa')}} </td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="3">Contact Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Fullname:</td>
                                            <td>{{ucwords('$fullname')}}</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Birth day:</td>
                                            <td>{{ucwords('ssagfaga')}} </td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td> {{ucwords('agfag')}} </td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Nationality:</td>
                                            <td> {{ucwords('asgafa')}} </td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Ethniticity:</td>
                                            <td> {{ucwords('adfadfa')}} </td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="3">Course Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Fullname:</td>
                                            <td>{{ucwords('$fullname')}}</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Birth day:</td>
                                            <td>{{ucwords('ssagfaga')}} </td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td> {{ucwords('agfag')}} </td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Nationality:</td>
                                            <td> {{ucwords('asgafa')}} </td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Ethniticity:</td>
                                            <td> {{ucwords('adfadfa')}} </td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="3">Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                            <td>Fullname:</td>
                                            <td>{{ucwords('$fullname')}}</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Birth day:</td>
                                            <td>{{ucwords('ssagfaga')}} </td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td> {{ucwords('agfag')}} </td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Nationality:</td>
                                            <td> {{ucwords('asgafa')}} </td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Ethniticity:</td>
                                            <td> {{ucwords('adfadfa')}} </td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="3">Plots</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                            <td>Fullname:</td>
                                            <td>{{ucwords('$fullname')}}</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Birth day:</td>
                                            <td>{{ucwords('ssagfaga')}} </td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td> {{ucwords('agfag')}} </td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Nationality:</td>
                                            <td> {{ucwords('asgafa')}} </td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Ethniticity:</td>
                                            <td> {{ucwords('adfadfa')}} </td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </center>
                    </div>
                    <div class="aside span10">
                        <div class="hed">
                            <h3>A add daily Transaction</h3>
                        </div>
                        <hr>
                            <form action="#" role="form" id="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Amount Paid
                                            </label>
                                            <input type="text" placeholder="Peter" class="form-control" id="firstname" name="firstname">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">
                                                Payment Date
                                            </label>
                                            <input type="text" placeholder="Clark" class="form-control" id="lastname" name="lastname">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">
                                                Plots
                                            </label>
                                            <input type="text" placeholder="Clark" class="form-control" id="lastname" name="lastname">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">
                                                Confirm Password
                                            </label>
                                            <input type="password" placeholder="password" class="form-control" id="password_again" name="password_again">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">
                                                Payment Code
                                            </label>
                                            <input type="password" placeholder="password" class="form-control" id="password_again" name="password_again">
                                        </div>
                                    </div>
             
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <button class="btn btn-green btn-block" type="submit">
                                            Update <i class="fa fa-arrow-circle-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
    		</div>	<!--#bio-->	

    	</div> <!-- #index -->
    </div> <!-- a .cc -->
  <div class="cc" id="transactions">
    <h3>Transactions Records</h3>
    <hr>
    <table class="table table-bordered">
      <thead>
        <tr>
            <th>course name</th>
            <th>course lecturer</th>
            <th>duration</th>
            <th>admission date</th>
            <th>award</th>
            <th>update</th>
            <th>create</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($data['courses'])): ?>
            <?php foreach ($data['courses'] as $key => $value): ?>
            <tr>
                <td>{{ucwords($value['name'])}}</td>
                <td>{{ucwords($value['staff']['Staff_MainLevelTeaching'])}}</td>
                <td>{{ucwords($value['duration'])}}</td>
                <td>{{ucwords($data['admission_date'])}}</td>
                <td>{{ucwords($value['qualification'])}}</td>
                <td>{{ucwords($value['updated_at'])}}</td>
                <td>{{ucwords($value['created_at'])}}</td>
            </tr>                                               
            <?php endforeach ?>
        <?php endif ?>
      </tbody>
    </table>
  </div>
@stop
@include('templates/bottom-admin')