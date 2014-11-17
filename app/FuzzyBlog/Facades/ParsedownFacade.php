<?php namespace FuzzyBlog\Facades;

use Illuminate\Support\Facades\Facade;

class ParsedownFacade extends Facade {
	
	protected static function getFacadeAccessor() 
	{
		return 'parsedown';
	}

}