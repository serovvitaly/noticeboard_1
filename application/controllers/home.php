<?php

class Home_Controller extends Base_Controller {

	public $layout = 'base.column3';

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