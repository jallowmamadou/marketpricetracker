<?php namespace Universal\Administration;

use services\menus\Topbar;

trait  Menu {

public $menu;

	function __construct(Topbar $topbar){

		$this->menu = $topbar->getMenu(Auth::user());

		// var_dump($topbar);

	}
}