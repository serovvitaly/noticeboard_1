<?php


class Categorie_Controller extends Base_Controller {
    
    
    public function action_get($cat)
    {
        $this->layout->content = View::make('base.categorie');
    }
    
    
}
