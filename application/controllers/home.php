<?php

class Home_Controller extends Base_Controller {

	/*
	|--------------------------------------------------------------------------
	| The Default Controller
	|--------------------------------------------------------------------------
	|
	| Instead of using RESTful routes and anonymous functions, you might wish
	| to use controllers to organize your application API. You'll love them.
	|
	| This controller responds to URIs beginning with "home", and it also
	| serves as the default controller for the application, meaning it
	| handles requests to the root of the application.
	|
	| You can respond to GET requests to "/home/profile" like so:
	|
	|		public function action_profile()
	|		{
	|			return "This is your profile!";
	|		}
	|
	| Any extra segments are passed to the method as parameters:
	|
	|		public function action_profile($id)
	|		{
	|			return "This is the profile for user {$id}.";
	|		}
	|
	*/

	public function action_index()
	{
        
		$this->layout->content = View::make('base.index');
        
        $categories = Categorie::order_by('sort', 'asc')->get();
        
        $catalog = array();
        
        if( count($categories) > 0 ) {
            foreach ($categories AS $_ctg) {
                
                if ($_ctg->parent > 0) {
                    $catalog[$_ctg->parent]['items'][$_ctg->id] = array(
                        'name'  => $_ctg->name
                    );
                } elseif ($_ctg->parent == 0) {
                    $catalog[$_ctg->id]['name'] = $_ctg->name;                    
                }
            }
        }
        
        $this->layout->content->catalog = $catalog;        
        
        $this->layout->title = 'Page Foo Title';
	}

}