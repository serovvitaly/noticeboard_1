
<?= View::make('base.announcement.catalog', array('categories' => $categories)) ?>


<script type="text/javascript">
$(document).ready(function(){
    $("#accordion2").collapse();
    
    $('#modal-place').modal({
        show: false,
        backdrop: true
    });
    $('#modal-place').on('hide', function () {
        /**
        * @todo Написать код, который проверяет, если часть данных формы заполнена, то предупреждать пользователя, что при закрытии окна данные будут утеряны
        */
    });
});
</script>


<!-- Modal Place -->
<div id="modal-place" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="modal-place-label" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="brand" id="modal-place-label">Разместить объявление</h4>
  </div>
  <form action="/place/add" method="POST" style="margin: 0;">
  <div class="modal-body">
  
      <div class="tabbable">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#place-tab1" data-toggle="tab">Основное</a></li>
            <li class="disabled"><a href="#place-tab2" data-toggle="tab">Фотогалерея</a></li>
            <li class="disabled"><a href="#place-tab3" data-toggle="tab">Контактные данные</a></li>
            <li class="disabled"><a href="#place-tab4" data-toggle="tab">Завершение</a></li>
          </ul>
          <div class="tab-content" style="height: 260px;">
            <div class="tab-pane active" id="place-tab1">
            
            
                <div style="padding-bottom: 10px;" class="plase-categories">
                    <div class="plase-categorie-selected empty">выберите категорию</div>
                    <?= View::make('base.announcement.catalog', array('categories' => $categories)) ?>
                </div>
                <script type="text/javascript">
                    $('#modal-place .plase-categories .dropdown-menu ul a').click(function(){
                        var base_ctg =  $( $( $(this).parents('li.dropdown-submenu').get(0) ).children('.base-ctg').get(0) ).html();
                        $('#modal-place .plase-categorie-selected').removeClass('empty');
                        $('#modal-place form input[name="ctg"]').val( $(this).attr('id').split('-')[1] );
                        $('#modal-place .plase-categorie-selected').html( base_ctg + ' / ' + $(this).html() );
                        
                        //$(this).parents('.dropdown-menu').css('display', 'none');
                        $(this).parents('.btn-group').removeClass('open');

                        return false;
                    });
                </script>
                <input type="hidden" name="ctg" value="">

                <div title=" Загрузить картинку" style="cursor: pointer; width: 130px; height: 130px; border: 1px solid #CCCCCC; float: left; margin-right: 10px; background: url(http://vk.com/images/camera_a.gif) center no-repeat;"></div>

                <input style="width: 69%; margin-bottom: 6px;" type="text" placeholder="Заголовок"><br/>
                <textarea style="width: 69%; height: 86px; line-height: 15px;" cols="" rows="" placeholder="Описание"></textarea>
                
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
                
            </div>
            <div class="tab-pane" id="place-tab2">
              <p>ФОТКИ</p>
            </div>
            <div class="tab-pane" id="place-tab3">
              <p>Howdy, I'm in Section 2.</p>
            </div>
            <div class="tab-pane" id="place-tab4">
              <p>What up girl, this is Section 3.</p>
            </div>
          </div>
      </div>
    
  </div>
  <div class="modal-footer">
    <button class="btn btn-small">Назад</button>
    <button class="btn btn-small">Далее</button>
    <button class="btn btn-small btn-primary">Готово</button>
    <button class="btn btn-small" data-dismiss="modal" aria-hidden="true">Отмена</button>
  </div>
  </form>
</div>