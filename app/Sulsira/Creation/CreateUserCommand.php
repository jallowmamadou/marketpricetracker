<?php  namespace Universal\Creation;
/**
 * extends AnotherClass
 */
class CreateUserCommand
{
public $user;
public $role;
public $property;
public  $input;

    function __construct($input)
    {
       	$this->input = $input ?: \Input::all();
    	$this->user = $this->user();
    	$this->role = $this->role();
    }

    private function user(){
    	$data  = [
    		'email' => $this->input['email'],
    		'password'=> $this->input['password']
    	];  
    	return $data;
    }
    private function role(){
		$data = [
					'security_level' => $this->input['security_level'],
					'domain' => $this->input['domain'],
					'usergroup' => $this->input['user_group'],
					'fullname' => $this->input['first_name'].' '.$this->input['last_name'],
					'department' => $this->input['department'],
					'phone' => $this->input['phones']
				];	
    	return $data;
    }

} 