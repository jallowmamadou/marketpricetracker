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
use Universal\Seller\SellerRepository;
use User, UserRole, Seller;

class CreateUserCommandHandler implements CommandHandler{


    protected $repository;
    protected $sellerrepo;
	function __construct(UserRepository  $repository, SellerRepository  $sellerrepo){
            $this->repository = $repository;
            $this->sellerrepo = $sellerrepo;
        }    


    public function handle($command){

        $role =  (!empty($command->role))? $command->role : [];
    	$property =  (!empty($command->property))? $command->property : [];
        $user = User::creation($command->user);
       	$this->repository->save($user);


        // file pulling

        if($command->input['profilePic']){

            $main_dir = 'media/users/'.$command->role['userType'].'/'.$user->id;   

            $img = Uploader::image($command->input['profilePic'])
                ->directory($main_dir)
                ->rename($user->id.'_'.'pp')
                ->resize(128,128, 'thumbsnails');
            $image = $img->details();  
            
            $property = array_add( $property,'thumbnail', $image['new']['thumnail_location'].'/'.$image['new']['filename'] );
            $property = array_add($property,'image',  $image['new']['file'] );
            $property = array_add($property,'filename',$image['new']['filename'] );
            $property = array_add($property,'url', $image['new']['folder']);

        }

        // save the seller
        $seller = Seller::creation($command->seller['seller']);
        $this->sellerrepo->save( $seller );



        $person = \Person::creation($command->seller['person']);
        $this->sellerrepo->person( $person );

        $contacts =  (!empty($command->seller['contacts']))? $command->seller['contacts'] : [];
        $contacts = array_add($contacts,'entity_id',  $person->id );
        $contacts = array_add($contacts,'entity_type',  'person' );
        $contacts = \ContactInfo::creation(  $contacts );
        $this->sellerrepo->contact(  $contacts );

        
        // #there should be a method to prepare the data bcause this is a repository
        $role = array_add($role,'user_id',$user->id);
        $role = array_add($role,'seller_id',$seller->id);
        $role = array_add($role,'url',$this->urlconstruct($role['userType']));


        $role = UserRole::creation($role);
        $this->repository->role( $role );

        // // save the properties
        $property = array_add($property,'user_id', $user->id);
        $property = array_add($property,'role_id', $role->id);
        $property = array_add($property,'contact_id', $contacts->id);
        $property = array_add($property,'person_id', $person->id);
        $properties = \UserProperty::creation($property);
        $this->repository->property( $properties );


        // return user details

        return $user;

    }

    private function urlconstruct($domain){
    	return strtolower($domain).'/dashboard';
    }
} 