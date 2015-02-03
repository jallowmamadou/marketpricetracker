<?php namespace Sulsira\Locator;

use Illuminate\Config\Repository;
use Locator, Config, Session, Redirect;
/**
* 
*/
class Locate 
{
	protected static $instance;

	protected $session_array;

	protected function shoot($args){ # like the init in js or main in java

		$url = '/';
		// set up sessiont
		Session::flush();
		$session_domain = Session::get('domain');
		$session_url = Session::get('url');
		$session_usergroup = Session::get('usergroup');
		$session_default = Config::get('locator::default');

		if (Session::has('url') && !empty($session_url))
		{
			$url = $this->director($session_url);
		}else{
			if (Session::has('domain') && !empty($session_domain)){

				$url = $this->get_domain($session_domain);

			}else{
				if (Session::has('usergroup') && !empty($session_usergroup)){
				
					$url = $this->get_domain($session_url);

				}else{
					$url =$this->sesion_manager($session_default );
				}
			}

		}
		// get a method that checks and redirects to the appropriate directory by :
			// gets in your session if it has a url 
				// if yes it takes you to that url
			//else it check in your session if you have a domain then 
				// if yes takes you to your domain
				// else checks to see if you have a usergroup and then takes you to the default of that usergroup
			// if all fails logs you out and takes you to the login page
		// sends a problem log to the admin
		// return $action;
		return Config::get('locator::default');

	}
	protected function expand(){
		// 
	}
	protected function director($session_url){
		// return Redirect::intended($session_url);
		return $session_url;
	}

	protected function sesion_manager($session_default){
		Session::flush();
		return $this->director($session_default);
	}	

	protected function get_domain($session_domain){
		$pattern = $session_domain.'/dashboard';
		return $this->director($pattern);
	}

	protected function logger(){
		
	}

	// public static function __callStatic($name, $args){

 //        $args = empty($args) ? [] : $args[0];

 //        $instance = static::$instance;
 //        if ( ! $instance) $instance = static::$instance = new static;

 //        return $instance->shoot($name, $args);


	// }

	public static function navigate($args = null){

        $args = empty($args) ? [] : $args[0];

        $instance = static::$instance;
        if ( ! $instance) $instance = static::$instance = new static;

        return $instance->shoot( $args);


	}


}