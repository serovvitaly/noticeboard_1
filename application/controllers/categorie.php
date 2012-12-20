<?php


class Categorie_Controller extends Base_Controller {
    
    
    public function action_get($cat)
    {
        $this->layout->content = View::make('base.categorie');
        
        $this->layout->content->announcements = array(
            array('title'=>'Продажа 2-х комнт.кв. Ленинский пр, хор.ремонт', 'descr'=>'Для корпоративном мероприятии компании QIWI, посвященном празднованию нового года был установлен мультитач экран'),
            array('title'=>'Объявление такое то', 'descr'=>'Для корпоративном мероприятии компании QIWI, посвященном'),
            array('title'=>'Объявление такое то столько', 'descr'=>'Для корпоративном мероприятии компании QIWI, посвященном празднованию нового года'),
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
        
        
        $this->layout->content->categories = Categorie::where('parent', '=', 0)->get();
        
    }
    
    
}
