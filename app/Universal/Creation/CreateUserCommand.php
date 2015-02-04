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
public $seller;

    function __construct($input)
    {
       	$this->input = $input ?: \Input::all();
    	$this->user = $this->user();
        $this->role = $this->role();
        $this->seller = $this->seller();
    	$this->property = $this->property();
    }

    private function user(){
    	$data  = [
    		'phone' => $this->input['phone'],
    		'password'=> $this->input['password']
    	];  
    	return $data;
    }
    private function role(){
		$data = [
					'userType' => $this->input['user_type']
				];	
    	return $data;
    }
    private function property(){
        $data = [

                ];  
        return $data;
    }
    private function seller(){
        $data = [
                    'seller' => [
                        'location'=> $this->input['location'],
                        'sellerType' => $this->input['user_type'],
                        'name' => $this->input['name']
                    ],

                    'person' => [
                        'fname' => $this->input['first_name'],
                        'lname' => $this->input['last_name']
                    ],

                    'contacts' =>[
                        'email' => $this->input['email'],
                        'telephone' => $this->input['phones']
                    ]

                ];  
        return $data;
    }


} 