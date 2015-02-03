<?php
/**
 * Created by PhpStorm.
 * User: mamadou
 * Date: 1/21/2015
 * Time: 4:45 AM
 */

namespace Universal\Creation;

use Sulsira\Uploader\Uploader;
use Laracasts\Commander\CommandHandler;
use Universal\User\UserRepository;
use User, UserRole;

class CreateUserCommandHandler implements CommandHandler{


    protected $repository;

	function __construct(UserRepository  $repository){
            $this->repository = $repository;
        }    


    public function handle($command){

    	$role =  (!empty($command->role))? $command->role : [];
        $user = User::creation($command->user);
       	$this->repository->save($user);


        // file pulling
        $main_dir = 'media/users/'.$command->role['usergroup'].'/'.$user->id;


        if($command->input['profilePic']){
            
            $img = Uploader::image($command->input['profilePic'])
                ->directory($main_dir)
                ->rename($user->id.'_'.'pp')
                ->resize(128,128, 'thumbsnails');
            $image = $img->details();  
            
            $role = array_add( $role,'thumbnail', $image['new']['thumnail_location'].'/'.$image['new']['filename'] );
            $role = array_add($role,'image',  $image['new']['file'] );
            $role = array_add($role,'filename',$image['new']['filename'] );
            $role = array_add($role,'url', $image['new']['folder']);

        }




        #there should be a method to prepare the data bcause this is a repository
		$role = array_add($role,'user_id',$user->id);
        $role = array_add($role,'url',$this->urlconstruct($role['domain']));



        $role = UserRole::creation($role);
      	$this->repository->role( $role );

    }

    private function urlconstruct($domain){
    	return strtolower($domain).'/dashboard';
    }
} 