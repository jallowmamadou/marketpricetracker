<!-- Modal -->

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Add a new land lord</h3>
  </div>
		  <div class="modal-body">
				{{Form::open(['route'=>'land-lords.store', 'files'=>true],[],['class'=>'form-snippet'])}}

					<div class="level details">

						<div class="first">
							<div>
								{{Form::label('person[fname]','First Name')}}
								{{Form::text('person[fname]',null,['class'=>'input-xlarge','placeholder'=>'Enter first name','required'=>1])}}
							</div>
							<div>
								{{Form::label('person[mname]','Middle Name')}}
								{{Form::text('person[mname]',null,['class'=>'input-xlarge','placeholder'=>'Enter middle name'])}}
							</div>
							<div>
								{{Form::label('person[lname]','Last Name')}}
								{{Form::text('person[lname]',null,['class'=>'input-xlarge','placeholder'=>'Enter last name','required'=>1])}}
							</div>							
						</div>
					</div>
					<div class="level details">
						<span>Bio </span>
						<hr>
						<div class="first ">
							<div>
								{{Form::label('person[dob]','Birthday')}}
								{{Form::date('person[dob]',['class'=>'input-xlarge','placeholder'=>'Enter admission date','required'=>1])}}
							</div>
							<div>
								{{Form::label('person[Pers_Ethnicity]','Ethniticity')}}
								<select name="person[Pers_Ethnicity]" id="enit" class="input-xlarge">
									<?php $countries = Variable::domain('Pers_Ethnicity')->toArray();  ?>
									@foreach ($countries as $key => $country)
									<option>{{$country['Vari_VariableName']}}</option>
									@endforeach
								</select>
							</div>
							<div>
								{{Form::label('person[Pers_Nationality]','Nationality')}}
								<select name="person[Pers_Nationality]" id="nation" class="input-xlarge">
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
								{{Form::text('address[Addr_Town]',null,['class'=>'input-xlarge','placeholder'=>'Enter town'])}}
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
								{{Form::text('address[Addr_AddressStreet]',null,['class'=>'input-xlarge','placeholder'=>'Enter street'])}}
							</div>
						</div>
					</div>
					<div class="level details">
						<span>Contact</span>
						<hr>
						<div class="first ">
							<div>
								{{Form::label('contact[phones]','Phones')}}
								{{Form::text('contact[phones]',null,['class'=>'input-xlarge','placeholder'=>'Enter phone number(S)'])}}
							</div>
							<div>
								{{Form::label('contact[email]','Email')}}
								{{Form::text('contact[email]',null,['class'=>'input-xlarge','placeholder'=>'Enter Email address'])}} 
							</div>
							<div>
								{{Form::label('contact[telephone]',' Telephone (land line)')}}
								{{Form::text('contact[telephone]',null,['class'=>'input-xlarge','placeholder'=>'Enter numbers'])}}
							</div>
						</div>
					</div>
					<div class="level details">
						<span>Identification details</span>
						<hr>
						<div class="first ">
							<div>
								{{Form::label('person[nin_id]','Nation id number / passport number')}}
								{{Form::text('person[nin_id]',null,['class'=>'input-xlarge span6','placeholder'=>'NIN number or passport number'])}} 
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
		  </div>
			<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-primary" name="createUser">Save changes</button>
			</div><!-- end of modal footer -->		
	 {{Form::close()}}
</div>