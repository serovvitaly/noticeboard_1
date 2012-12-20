<?php


class Place_Controller extends Base_Controller {
    
    
    public function action_index()
    {
        $this->layout->content = View::make('base.announcement.place');
    }
    
}
