<?php


class Place_Controller extends Base_Controller {
    
    public $layout = 'base.column2-left';
    
    public function action_index()
    {
        $this->layout->content = View::make('base.announcement.place');
        
        $this->layout->left_side = View::make('base.left_side');
    }
    
    
    public function action_add()
    {
        //
    }
}
