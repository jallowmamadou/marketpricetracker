<?php

class SessionsController extends \WelcomeController {

	/**
	 * Display a listing of the resource.
	 * GET /sessions
	 *
	 * @return Response
	 */
	public function index()
	{
		// Locator::locate();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sessions/create
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Auth::check()) return Redirect::to('/admin');
		$this->layout->content = View::make('welcome.index');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function store()
	{

		$creditials = array(
			'phone' => Input::get('phone'),
			'password' => Input::get('password')
		);
		

		if (Auth::attempt($creditials)) {

			// YOU ARE LOGGED IN

				// get your roles
					
				// redirect to the privilledge page
			$roles = UserRole::where('user_id','=',Auth::user()->id)->first();
			$roles = $roles ? $roles->toArray() : [];

			// return Redirect::intended('/admin');
		}
		// Flash::error('Access Denied!');
		// return Redirect::back();

	}

	/**
	 * Display the specified resource.
	 * GET /sessions/{id}
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
	 * GET /sessions/{id}/edit
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
	 * PUT /sessions/{id}
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
	 * DELETE /sessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
		return Redirect::to('/login');
	}

}