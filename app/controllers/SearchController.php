<?php

class SearchController extends \AdminController {

	/**
	 * Display a listing of the resource.
	 * GET /search
	 *
	 * @return Response
	 */
	private $keywords = '';


	/**
	 * Show the form for creating a new resource.
	 * GET /search/create
	 *
	 * @return Response
	 */

	/**
	 * Display the specified resource.
	 * GET /search/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// only people are filtered
		$input = Input::all(); #security loop hole
		if ($input['pers'] == 'Staff') {
			// do some processes

			return Redirect::to('staffs/'.$input['key']);
			// $this->layout->content = View::make('admin.staffs.show');
		}
		if ($input['pers'] == 'Agent') {
			// do some processes
			$go = Agent::where('agen_persID','=',$input['key'])->pluck('agen_id');
			return Redirect::to('agents/'.$go);
			// $this->layout->content = View::make('admin.agents.show');
		}
		if ($input['pers'] == 'Customer') {
			// do some processes
			$go = Customer::where('cust_personID','=',$input['key'])->pluck('cust_id');
			return Redirect::to('customers/'.$go);
			// $this->layout->content = View::make('admin.agents.show');
		}

	}

	public function index(){
		$input = Input::all();
		$this->type($input);
	}


	public function type($query)
	{
		$q = $query;

		$this->keywords = $q['q'];

		if (empty($q)) {
			var_dump('nothing to search for');
		}
		if (!empty($q['q'])) {

			if (!empty($q['type'])) {

				if ($q['type'] == 'natural') {

					$this->stringType(e($q['q']),$q['x']);

				}else if($q['type'] == 'index'){

						$this->indexSearch(e($q['q']));
				}
			}else{
				
				$this->stringType(e($q['q']));
			}
		}
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /search/create
	 *
	 * @return Response
	 */
	public function stringCreator()
	{
		return 'hello';
	}
	public function stringType($string)
	{
		$data_search = ['string'=>$string];
		if (str_contains($string,' ')) {
			// its means its a sentences or phrase
			$data_search = [
				'string' => $string,
				'tables' => ['persons','addresses','plots','houses']
			];
		}else{
			if (is_numeric($string)) {
				$data_search = [
					'string' => $string,
					'tables' => ['contacts']
				];
			}else{
			    if(filter_var($string, FILTER_VALIDATE_EMAIL)) {
			       		$data_search = [
					'string' => $string,
					'tables' => ['contacts']
					];
			    }

			    if(is_string($string)) {
			       	$data_search = [
					'string' => $string,
					'tables' => ['persons','addresses','plots','contacts','houses']
					];
			    }	

			}
		}

		$this->naturalSearch($data_search);

	}
	/**
	 * Store a newly created resource in storage.
	 * POST /search
	 *
	 * @return Response
	 */
	public function indexSearch($string)
	{
		// 
	}




	public function naturalSearch($search, $x = 0)
	{
		// $string = "jolloftutors@hotmail.com";
		// $string = "momodou jallow";
		$resutls_set = array();
		$string = $search['string'];
		$limit = 0 .','. 28;	
		if(is_numeric($x)){

			if ($x != 1) {

				$count = 10;
				$limit = ( 28 + (  $count * $x  ) ) .','. ( $count * $x );

			}
			
		}

		if (isset($search['tables'])) {
			foreach ($search['tables'] as $key => $value) {

					if ($key == 'persons') {
						$resutls_set['persons']= DB::select(DB::raw("
							(SELECT
								id AS primaryKey , pers_type AS entity,  @table := 'persons' AS tabal
								FROM persons
								WHERE MATCH(pers_fname,pers_mname,pers_lname)
								AGAINST('$string' IN BOOLEAN MODE)

						)"));
					}

					if ($key == 'plots') {
						$resutls_set['plots']= DB::select(DB::raw("
								(SELECT
									plot_id AS primaryKey,plot_name  AS entity ,plot_number  AS type, @table := 'plots' AS tabal
									FROM plots
									WHERE MATCH(plot_name,plot_location,plot_number)
									AGAINST('$string' IN BOOLEAN MODE)
								)"));
					}
					if ($key == 'contacts') {
						$resutls_set['contacts']= DB::select(DB::raw("
									( SELECT
										id AS primaryKey,Cont_EntityID  AS entity ,Cont_EntityType  AS type, @table := 'contacts' AS tabal
										FROM contacts
										WHERE MATCH(Cont_Contact)
										AGAINST('$string' IN BOOLEAN MODE)
									)"));
					}
					if ($key == 'houses') {
						$resutls_set['houses']= DB::select(DB::raw("
									( SELECT
										hous_id AS primaryKey,hous_compoundID  AS entity ,hous_number  AS type, @table := 'houses' AS tabal
										FROM houses
										WHERE MATCH(hous_description,hous_availability)
										AGAINST('$string' IN BOOLEAN MODE)
									)"));
					}


			}
		}
		$this->fetch($resutls_set);
	}


	public function limit($array,$postion)
	{
		// reads an array from a position
		// return all values up to the limit stop
		// calls fetch fn to to fect the details of the array from database
	}


	public function fetch($array)
	{
		// checks for the values
		$found = array();
		$results =  array();
		
			if (!empty($array)) {
				foreach ($array as $k => $val) {
					foreach ($val as $key => $value) {

						if ($value->tabal == 'plots') {

							if ( strtolower($value->entity) == strtolower($this->keywords) ) {
								$plot = Plot::where('plot_id','=',$value->primaryKey)->get()->toArray();
								$found['plots'][] = $plot;
							}
								$plot = Plot::where('plot_id','=',$value->primaryKey)->get()->toArray();
								$found['plots'][] = $plot;

						}else if($value->tabal == 'persons'){
							
							if ($value->entity == 'Staff') {

								$person = Person::with('staff')->where('id','=',$value->primaryKey)->get();
								if ($person != null) {

										$person = $person->toArray();
										$results['staff'] = $person;

								}

							}

							if ($value->entity == 'Landlord') {

								$person = Person::with('landlord')->where('id','=',$value->primaryKey)->get();
								if(!empty($person)){
										$person = $person->toArray();
										$results['landlord'] = $person;									
								}

							}
							if (strtolower($value->entity) == strtolower('tenant')) {

								$person = Person::with('tenance')->where('id','=',$value->primaryKey)->get();
								if ($person != null) {

										$person = $person->toArray();
										$results['tenant'] = $person;
								}


							}


							if (strtolower($value->entity) == strtolower('Agent')) {

								
								$person = Person::with('agent')->where('id','=',$value->primaryKey)->first();

								// if ($person != null) {
								// 	$person = $person->toArray();
								// 	// if (strtolower($value->entity) == strtolower($this->keywords)) {

								// 	// // $person = Person::find($value->primaryKey)->toArray();
								// 	// $person = Person::with('agents')->where('id','=',$value->primaryKey)->first()->toArray();
								// 	// $found['agent'][] = $person;

								// 	// }

								// 	// $person = Person::with('agents')->where('id','=',$value->primaryKey)->first()->toArray();
									
								// 	$results['agent'][] = $person;
								// }	

								if(!empty($person)){
										$person = $person->toArray();
										$results['agent'][] = $person;									
								}



							}

							if ($value->entity == 'Customer') {


								$person = Person::with('customers')->where('id','=',$value->primaryKey)->first()->toArray();
								if ($person['customers'] != null) {
									if (strtolower($value->entity) == strtolower($this->keywords)) {
									// $person = Person::find($value->primaryKey)->toArray();
										$person = Person::with('customers')->where('id','=',$value->primaryKey)->first()->toArray();
									$found['customer'][] = $person;
									}
									// $person = Person::find($value->primaryKey)->toArray();
									$person = Person::with('customers')->where('id','=',$value->primaryKey)->first()->toArray();
									$results['customer'][] = $person;
								}							

							}

						}else if($value->tabal == 'contacts'){
							
							$contacts = Contact::with('person')->where('id','=',$value->primaryKey)->first()->toArray();
	
							if (strtolower($value->entity) == strtolower($this->keywords)) {
								$contact = $contacts;
								$found['contact'][] = $contact;
							}
							$contact = Contact::find($value->primaryKey)->toArray();
							$results['contact'][] = $contacts;


						}else if($value->tabal == 'houses'){
							
							$houses = House::where('hous_id','=',$value->primaryKey)->first()->toArray();
	
							if (strtolower($value->entity) == strtolower($this->keywords)) {
								$house = $houses;
								$found['houses'][] = $house;
							}
							$houses = House::where('hous_id','=',$value->primaryKey)->first()->toArray();
							$results['houses'][] = $houses;


						}			
					}
				

				}
				//fn replace array 
				if (!empty($found)) {
					$results = $found;
					// dd($found);
				}

			}


			$this->results($results);
		}

	public function results($searchs)
	{
		$this->layout->content = View::make('admin.search')->with('data',$searchs);

	}



}