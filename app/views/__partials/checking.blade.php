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