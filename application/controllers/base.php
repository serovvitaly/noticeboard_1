<?php

class Base_Controller extends Controller {

    
    public $layout = 'base.layout';
    
    
	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}
    
    
    public function before()
    {       
        $this->layout->title = '';
        $this->layout->content = '';
    }

}