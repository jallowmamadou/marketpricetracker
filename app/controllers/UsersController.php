<?php
use Universal\Forms\CreateUser;
use Universal\Creation\CreateUserCommand;
use Laracasts\Commander\CommandBus;
class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	protected $layout = 'layouts/dashboard';
	private $usercreate;
    private $commandBus;

	public function __construct(CommandBus $commandBus, CreateUser $usercreate){
		// determine who access what and do all the controlling here
		// a loop that create an array of the methods you are allowed to access
		$this->usercreate = $usercreate;
        $this->commandBus = $commandBus;
	}

	public function index()
	{
		$users = User::with('role')->get();
		$users = $users ? $users->toArray() : []; 

		// $this->layout->content = View::make('admin.Users.index')->with('users',$users);
		// $users = User::where('deleted','!=',1)->get()->toArray();
		// // $this->data['users'] = $users;
		// dd(($users));
		$this->layout->content = View::make('Users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
			$input = Input::all();
		// validate

        	$this->usercreate->validate($input);

		// move to a data transfer object
			$command = new CreateUserCommand($input);
			$this->commandBus->execute($command);

			


		// move to repo 


		// insert in database


        // redirect to the right place

			//
//			$errors = $u->errors;
//			return Redirect::back()->withErrors($errors)->withInput();

	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
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
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::with('role')->where('id','=',$id)->first();
		$user = (!empty($user))? $user->toArray() : [];
        $this->layout->content =  View::make('admin.Users.edit')->with('user',$user);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input  = Input::all();
		// dd($input);
	$rules = [
		'email'=>'email',
	];
		$validation = Validator::make($input,$rules);

		if ($validation->fails()) {
			return Redirect::back()->withErrors($validation)->withInput();
		}

		if(isset($input['user_id'])):
			$user = User::findOrFail($id);
			// $user->fill($input);
			$user->accessCode = $input['accessCode'];
			$user->save();
		endif;

		if(!empty($input['userRole_id']) && isset($input['userRole_id'])):
			$role = UserRole::findOrFail($input['userRole_id']);
			$role->fill($input);
			$role->save();
		endif;

		if(isset($input['change_password'])):

			$user = User::findOrFail($id);
			$user->password = Hash::make($input['password']);
			$user->save();			

		endif;

		return Redirect::to('users')->withErrors($validation)->withInput();
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::with('role')->where('id','=',$id)->first();
		$user = ($user)? $user->toArray() : $user;
		$roleid = ($user)? $user['role']['id'] : [];
		(!empty($roleid))? UserRole::destroy($roleid) : [];
		$user = User::destroy($id);
		Flash::overlay('<div style="color:red">you have deleted a user</div>');
		return Redirect::to('users');
	}

}