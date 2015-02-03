<?php
/**
 * Created by PhpStorm.
 * User: mamadou
 * Date: 1/21/2015
 * Time: 5:03 AM
 */

namespace Universal\User;

use User, UserRole;

class UserRepository {

    public function save(User $user){
        return $user->save();
    }

    public function role(UserRole $user){
        return $user->save();
    }

} 