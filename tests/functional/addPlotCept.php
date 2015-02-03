<?php 
$I = new FunctionalTester($scenario);

$I->wantTo('create a new plot');

$I->amOnPage('/admin');
$I->click('Add Plot');


$I->seeCurrentUrlEquals('universal/plots/create');
$I->fillField('plot_name:', 'kyal ma');
$I->fillField('plot_size:', '200 x 50');
$I->fillField('plot_price:', '2000');
$I->click('Create Plot');
$I->seeCurrentUrlEquals('');
$I->see('you have add a plot');