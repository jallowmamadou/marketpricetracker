<?php namespace Sulsira\Locator;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class LocatorServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
	
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

	public function boot(){
		$this->package('sulsira/locator');
		AliasLoader::getInstance()->alias('Locator','Sulsira\Locator\Locate');

	}

}
