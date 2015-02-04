<?php
/**
 * Created by PhpStorm.
 * User: mamadou
 * Date: 2/4/2015
 * Time: 5:03 AM
 */

namespace Universal\Seller;

use  Person, Seller, ContactInfo;

class SellerRepository {

    public function save(Seller $seller){
        return $seller->save();

    }
    public function person(Person $person){
        return $person->save();
    }
    public function contact(ContactInfo $contacts){
        return $contacts->save();
    }
} 