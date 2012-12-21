<?php


class Categorie_Controller extends Base_Controller {
    
    
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
        
        
        $categories_mix = Categorie::all();
        
        $categories = array();
        
        if ($categories_mix) {
            foreach ($categories_mix AS $cat) {
                $categories[$cat->parent][] = $cat;
            }
        }
        
        $this->layout->content->categories = $categories;
        
    }
    
    
}
