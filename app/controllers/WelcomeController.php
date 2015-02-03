<?php

class WelcomeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /welcome
	 *
	 * @return Response
	 */
	protected $layout = 'layouts/welcome';

	public function index()
	{

		// $url = Locator::navigate() ;

		// if(Auth::check()) return Redirect::to($url);
		// if(Auth::check()) return Redirect::to('/admin');

		$this->layout->content = View::make('welcome.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /welcome/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('welcome.index');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /welcome
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /welcome/{id}
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
	 * GET /welcome/{id}/edit
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
	 * PUT /welcome/{id}
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
	 * DELETE /welcome/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		if ( Auth::check() ) {
				$status = User::whereId(Auth::user()->id)->update(array('status'=>0));
				Auth::logout();
				Session::flush();
				return Redirect::to('/');
			}else{
				return Redirect::to('login');
		}
	}

}