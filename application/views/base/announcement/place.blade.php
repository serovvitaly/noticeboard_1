<h3>Новое объявление</h3>

<fieldset>
  <legend>Основные</legend>
    <div style="padding-bottom: 10px;" class="plase-categories" id="plase-categories-selector">
        <div class="plase-categorie-selected empty">выберите категорию</div>
        <?= View::make('base.announcement.catalog', array('btn_group_width' => '132px', 'caption' => 'Категория')) ?>
    </div>
    <script type="text/javascript">
        $('#plase-categories-selector .dropdown-menu ul a').click(function(){
            var base_ctg =  $( $( $(this).parents('li.dropdown-submenu').get(0) ).children('.base-ctg').get(0) ).html();
            $('#plase-categories-selector .plase-categorie-selected').removeClass('empty');
            $('#plase-categories-selector form input[name="ctg"]').val( $(this).attr('id').split('-')[1] );
            $('#plase-categories-selector .plase-categorie-selected').html( base_ctg + ' / ' + $(this).html() );
            
            //$(this).parents('.dropdown-menu').css('display', 'none');
            $(this).parents('.btn-group').removeClass('open');

            return false;
        });
    </script>
    <input type="hidden" name="ctg" value="">

    <div title=" Загрузить картинку" style="cursor: pointer; width: 130px; height: 130px; border: 1px solid #CCCCCC; float: left; margin-right: 10px; background: url(http://vk.com/images/camera_a.gif) center no-repeat;"></div>

    <input style="width: 69%; margin-bottom: 6px;" type="text" placeholder="Заголовок"><br/>
    <textarea style="width: 69%; height: 86px; line-height: 15px;" cols="" rows="" placeholder="Описание (максимум 500 символов)"></textarea>

    <div class="btn-group" style="margin-bottom: 10px;">
        <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#" style="width: 116px;">Тип объявления</a>
        <ul class="dropdown-menu">
          <li><a href="#">Продам</a></li>
          <li><a href="#">Куплю</a></li>
          <li><a href="#">Обменяю</a></li>
          <li><a href="#">Сниму</a></li>
          <li><a href="#">Прочее</a></li>
        </ul>
      </div>

    <div class="btn-toolbar" style="margin: 0;">
      <div class="btn-group">
        <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">Регион <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div><!-- /btn-group -->
      <div class="btn-group">
        <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">Город <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div><!-- /btn-group -->
    </div>
</fieldset>

<p><br/></p>
<fieldset>
  <legend>Фотогалерея</legend>
</fieldset>

<p><br/></p>
<fieldset>
  <legend>Дополнительно</legend>
</fieldset>