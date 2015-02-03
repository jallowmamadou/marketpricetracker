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
		//
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
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);
		

		if (Auth::attempt($creditials)) {


			$roles = UserRole::where('user_id','=',Auth::user()->id)->first();
			$roles = $roles ? $roles->toArray() : [];
			Session::put('user_id', $roles['user_id']);
			Session::put('user_type', $roles['type']);
			Session::put('user_privileges', $roles['privileges']);
			Session::put('user_userGroup', $roles['userGroup']);
			Session::put('user_url', $roles['url']);
			Session::put('level', $roles['security_level']);
			return Redirect::intended('/admin');
		}
		Flash::error('Access Denied!');
		return Redirect::back();
		// varify if the records are in the users table

		// get the users table relationships

		// put in an array in teh session 

			// user
					// security level

					// user details

					// user connection

		// redirect to the dashboard the user should be
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