<?php
use services\menus\Topbar;
class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
		// $topbar = new Topbar();
		// $menu = $topbar->getMenu(Auth::user());
		// View::share('menu',$menu);
		// View::share('currentUser',Auth::user());
	}

}
