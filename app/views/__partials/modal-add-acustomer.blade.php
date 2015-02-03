<!-- Modal -->

<div id="add-Acustomer" class="modal hide fade span10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Pick a plot</h3>
  </div>
				{{Form::open(['route'=>'customers.store', 'files' => true],[],['class'=>'form-snippet'])}}

					<div class="">

						<div class="first">
							<div>
								{{Form::label('person[fname]','First Name')}}
								{{Form::text('person[fname]',null,['class'=>'span3','placeholder'=>'Enter first name','required'=>1])}}
							</div>
							<div>
								{{Form::label('person[mname]','Middle Name')}}
								{{Form::text('person[mname]',null,['class'=>'span3','placeholder'=>'Enter middle name'])}}
							</div>
							<div>
								{{Form::label('person[lname]','Last Name')}}
								{{Form::text('person[lname]',null,['class'=>'span3','placeholder'=>'Enter last name','required'=>1])}}
							</div>							
						</div>
					</div>
					<div class="level details">
						<span>Bio </span>
						<hr>
						<div class="first ">
							<div>
								{{Form::label('person[dob]','Birthday')}}
								{{Form::date('person[dob]',['class'=>'span3','placeholder'=>'Enter admission date','required'=>1])}}
							</div>

							<div>
								{{Form::label('person[Pers_Nationality]','Nationality')}}
								<select name="person[Pers_Nationality]" id="nation" class="span3">
									<?php $countries = Variable::domain('Country')->toArray();  ?>
									@foreach ($countries as $key => $country)
									<option>{{$country['Vari_VariableName']}}</option>
									@endforeach
								</select>
							</div>
							<div>
								{{Form::label('person[Pers_Gender]','Gender')}}
								{{Form::select('person[Pers_Gender]', array('male' => 'Male','female' => 'Female'));}}
							</div>
						</div>
					</div>
					<div class="level details">
						<span>Address</span>
						<hr>
						<div class="first ">
							<div>
								{{Form::label('address[Addr_Town]','Town')}}
								{{Form::text('address[Addr_Town]',null,['class'=>'span3','placeholder'=>'Enter town'])}}
							</div>
							<div>
								{{Form::label('address[Addr_District]','District')}}
								<select name="address[Addr_District]" id="region">
									<?php $countries = Variable::domain('Addr_District')->toArray();  ?>
									@foreach ($countries as $key => $country)
									<option>{{$country['Vari_VariableName']}}</option>
									@endforeach
								</select> 
							</div>
							<div>
								{{Form::label('address[Addr_AddressStreet]','street')}}
								{{Form::text('address[Addr_AddressStreet]',null,['class'=>'span3','placeholder'=>'Enter street'])}}
							</div>
						</div>
					</div>
					<div class="level details">
						<span>Contact</span>
						<hr>
						<div class="first ">
							<div>
								{{Form::label('contact[phones]','Phones')}}
								{{Form::text('contact[phones]',null,['class'=>'span3','placeholder'=>'Enter phone number(S)'])}}
							</div>
							<div>
								{{Form::label('contact[email]','Email')}}
								{{Form::text('contact[email]',null,['class'=>'span3','placeholder'=>'Enter Email address'])}} 
							</div>
							<div>
								{{Form::label('contact[telephone]',' Telephone (land line)')}}
								{{Form::text('contact[telephone]',null,['class'=>'span3','placeholder'=>'Enter numbers'])}}
							</div>
						</div>
					</div>
					<div class="level details">
						<span>Plot details</span>
						<hr>
						<div class="first ">
							<div>
								{{Form::label('plotID','Plot number')}}
								<select name="cust[cust_plotID]">
								<?php if (!empty($plots)): ?>
									<?php foreach ($plots as $key => $plot): ?>
										<option value="{{$plot['plot_id']}}">{{$plot['plot_number']}}</option>
									<?php endforeach ?>
									<?php else: ?>
									<option value="0">Not Available</option>
								<?php endif ?>
								</select>
								
							</div>
							<div>
								{{Form::label('cust[cust_downpayment]','Down payment')}}
								{{Form::number('cust[cust_downpayment]',null,['class'=>'span3','placeholder'=>'Enter down payment in dalasis','required'=>1,'step'=>'any'])}} 
							</div>
							<div>
								{{Form::label('cust[period]','Period in month')}}
								{{Form::number('cust[period]',null,['class'=>'span3','placeholder'=>'Enter period in months','required'=>1])}} 
							</div>
						</div>
					</div>
					<div class="level details">
						<span>Payment details</span>
						<hr>
						<div class="first ">
							<div>
								{{Form::label('cust[pay_commencing]','Commencing')}}
								{{Form::date('cust[pay_commencing]',['class'=>'span3 span6','placeholder'=>'Enter date the payments should start'])}} 
							</div>
							<div>
								{{Form::label('cust[pay_type]','Payment Type')}}
								{{Form::select('cust[pay_type]',['cash'=>'cash','mortgage'=>'mortgage'])}} 
							</div>
						</div>
					</div>
					<div class="level details">
						<span>Identification details</span>
						<hr>
						<div class="first ">
							<div>
								{{Form::label('person[nin_id]','Nation id number / passport number')}}
								{{Form::text('person[nin_id]',null,['class'=>'span3 span6','placeholder'=>'NIN number or passport number'])}} 
							</div>
							<div>
								{{Form::label('photo','Photo')}}
								{{Form::file('photo')}}
							</div>	
							<div>
								{{Form::label('document','Land Document')}}
								{{Form::file('document')}}
							</div>
						</div>
					</div>
					<div class="level details">
						<span>Next of Kin</span>
						<hr>

						<div class="first">
							<div>
								{{Form::label('kin[fname]','First Name')}}
								{{Form::text('kin[fname]',null,['class'=>'span3','placeholder'=>'Enter first name'])}}
							</div>
							<div>
								{{Form::label('kin[mname]','Middle Name')}}
								{{Form::text('kin[mname]',null,['class'=>'span3','placeholder'=>'Enter middle name'])}}
							</div>
							<div>
								{{Form::label('kin[lname]','Last Name')}}
								{{Form::text('kin[lname]',null,['class'=>'span3','placeholder'=>'Enter last name'])}}
							</div>	
							<div>
								{{Form::label('kin[contact]','Contacts')}}
								{{Form::text('kin[contact]',null,['class'=>'span3','placeholder'=>'Enter contact details'])}}
							</div>						
						</div>
					</div>

			<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-primary" name="createUser">Save changes</button>
			</div><!-- end of modal footer -->		
	 {{Form::close()}}
		  </div>
