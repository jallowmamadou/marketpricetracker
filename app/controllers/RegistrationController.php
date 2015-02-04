<?php
use Universal\Forms\CreateUser;
use Universal\Creation\CreateUserCommand;
use Laracasts\Commander\CommandBus;
class RegistrationController extends \BaseController {

	private $usercreate;
    private $commandBus;

    function __construct(CommandBus $commandBus, CreateUser $usercreate){

    	$this->usercreate = $usercreate;
        $this->commandBus = $commandBus;
    }
	/**
	 * Display a listing of the resource.
	 * GET /registration
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /registration/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /registration
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		// validate
		// $this->usercreate->validate($input);

		// move to a data transfer object
			$command = new CreateUserCommand($input);
			
			$user = $this->commandBus->execute($command);


			// then log the user 


				Auth::login($user);


		// redirect to the user type
			
			return Redirect::to($user->role->userType);
	}

	/**
	 * Display the specified resource.
	 * GET /registration/{id}
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
	 * GET /registration/{id}/edit
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
	 * PUT /registration/{id}
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
	 * DELETE /registration/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}