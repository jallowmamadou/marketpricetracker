<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('perform actions and see result');
$I->am('admin');
$I->wantTo('create a user');


$I->amOnPage('/');
$I->click("add user");
$I->seeCurrentUrlEquals('/users');


$I->fillField('Email:', 'mmeee');
$I->fillField('Password:', 'mmeee');
$I->click('Create User');

$I->seeCurrentUrlEquals('');
$I->see('i see here we are');
