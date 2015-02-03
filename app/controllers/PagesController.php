<?php

class PagesController extends \AdminController {

	/**
	 * Display a listing of the resource.
	 * GET /pages
	 *
	 * @return Response
	 */
	public function showData()
	{
		$this->layout->content = View::make('admin.data_entry');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pages/create
	 *
	 * @return Response
	 */
	public function getProblems()
	{
		$this->layout->content = View::make('admin.problems');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pages
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pages/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /pages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	public function postFind(){
		$input = Input::all();
		//find the person
		// find the persons course in students
		// $tenantomer1 = Customer::with('person')->get()->toArray();
		
		// $customer = Person::with('customers')->get()->toArray();
		$customer =  array();
		if (empty($input['pers_mname'])) {
		$customer = Person::with('customers')->whereRaw('pers_type = ? AND pers_fname = ? AND pers_lname = ?',['Customer',$input['pers_fname'],$input['pers_lname']])->get();
		}else{
		$customer =  Person::with('customers')->whereRaw('pers_type = ? AND pers_fname = ? AND pers_mname = ? AND pers_lname = ?',['Customer',$input['pers_fname'],$input['pers_mname'],$input['pers_lname']])->get();
		}
		$check = $customer->toArray(); #loop hole for error
		$customers = array();
		$found = array();
		$result = array();
		if (!empty($check)) {
			foreach ($check as $key => $value) {
				if ( isset($value['customers']) && !empty($value['customers'])) {
					foreach ($value['customers'] as $key => $cus) {
						if ($cus['cust_plotID']) {
							$plot = Plot::where('plot_id','=',$cus['cust_plotID'])->first();
							if ($plot) {
								$plot = $plot->toArray();
								$found = $plot;
							}
						}else{
							$plot = Plot::whereRaw('plot_size = ? AND plot_location = ?',[$input['plot_size'],$input['plot_location']])->first();
							if ($plot) {
								$plot = $plot->toArray();
								$found = $plot;
							}
						}						
					}

				}
			}
		}

		if (!empty($found)) {
				return Redirect::to('plots/'.$found['plot_id']);
		}else{
			Flash::overlay('message', "Plot Not Found");
			return Redirect::back();
		}

	}
	public function postFetch(){
		$input=Input::all();

		$plot = Plot::where('plot_number','=',$input['plot_number'])->first();
		// $this->layout->content = View::make('admin.students.show');
		if ( $plot ) {
			$plot = $plot->toArray();
			return Redirect::to('plots/'.$plot['plot_id']);
		}else{
			Flash::overlay('Plot Number '. $input['plot_number'] .' Not Found', 'Checking for Plot');
			return Redirect::back();
		}
	}
	public function postTenant(){
		$input = Input::all();
		//find the person
		// find the persons course in students
		// $customer1 = Customer::with('person')->get()->toArray();
		
		// $customer = Person::with('customers')->get()->toArray();
		

		$tenant =  array();

		if (empty($input['pers_mname'])) {

		$tenants = Person::with('tenance')->whereRaw('pers_type = ? 

			AND pers_fname = ?

			AND pers_lname = ?',

			['Tenant',$input['pers_fname'],$input['pers_lname']])->get();
		

			


		}
		else{

		$tenants =  Person::with('tenance')->whereRaw('pers_type = ? AND pers_fname = ? AND pers_mname = ? AND pers_lname = ?',['Tenant',$input['pers_fname'],$input['pers_mname'],$input['pers_lname']])->get();

		}

		$check = (!empty($tenants))? $tenants->toArray() : []; 
		$tenant = array();
		$found = array();
		$result = array();
		$h = House::whereRaw('hous_number = ? ',[$input['hous_number']])->first();
		if (!empty($check)) {

			foreach ($check as $key => $value) {
				if ( isset($value['tenance']) && !empty($value['tenance'])) {
					if (!empty($h)) {
						if ($value['tenance']['tent_houseID'] == $h->hous_id) {
							$found = $value['tenance'];
						}
						
					}
					
				}
			}
		}

		if (!empty($found)) {
				return Redirect::to('tenants/'.$found['tent_id']);
		}else{
			Flash::overlay('message', "Tenant Not Found");
			return Redirect::back();
		}
	}
	public function getTransaction(){
		#get a single date transaction
		$input = Input::all();
		dd($input);
	}
}