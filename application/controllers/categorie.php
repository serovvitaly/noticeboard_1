<?php


class Categorie_Controller extends Base_Controller {
    
    public $layout = 'base.column2-left';
    
    protected $_categories = array();
    
    public function before()
    {
        parent::before();
        
        $this->layout->nest('left_side', 'base.left_side');
    }
    
    public function action_get($cat)
    {
        $this->layout->content = View::make('base.categorie');
        
        $this->layout->content->announcements = array(
            array('title'=>'Продажа 2-х комнт.кв. Ленинский пр, хор.ремонт', 'descr'=>'Для корпоративном мероприятии компании QIWI, посвященном'),
            array('title'=>'Объявление такое то', 'descr'=>'Для корпоративном мероприятии компании QIWI, посвященном'),
            array('title'=>'Объявление такое то столько', 'descr'=>'Для корпоративном мероприятии компании QIWI, посвященном празднованию нового'),
            array('title'=>'Объявление такое то столько', 'descr'=>''),
            array('title'=>'Объявление такое то столько', 'descr'=>''),
            array('title'=>'Объявление такое то столько', 'descr'=>''),
            array('title'=>'Объявление такое то столько', 'descr'=>''),
            array('title'=>'Объявление такое', 'descr'=>''),
            array('title'=>'Объявление такое то столько', 'descr'=>''),
            array('title'=>'Объявление такое то столько', 'descr'=>''),
            array('title'=>'Объявление такое то столько', 'descr'=>''),
            array('title'=>'Объявление такое то столько', 'descr'=>''),
            array('title'=>'Объявление такое то столько', 'descr'=>''),
            array('title'=>'Объявление такое то столько', 'descr'=>''),
            array('title'=>'Объявление такое то столько', 'descr'=>''),
        );
        
        $this->layout->content->categories = $this->_categories;
        
    }
    
    
}
