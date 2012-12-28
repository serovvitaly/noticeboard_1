<?php


class Categorie_Controller extends Base_Controller {
    
    public $layout = 'base.column2-left';
    
    public function before()
    {
        parent::before();
        
        $this->layout->nest('left_side', 'base.left_side');
    }
    
    public function action_get($ctg)
    {
        Glob::set('ctg', $ctg);
        
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
    }
    
    
    public function action_filter($filter, $ctg = NULL)
    {        
        Glob::set('ctg', $ctg);
        
        $this->layout->content = $filter;  
        
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
    }
    
    
}
