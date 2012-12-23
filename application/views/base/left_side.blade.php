
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
  <form action="/place/add" method="POST">
  <div class="modal-body">
    
              
            <div style="padding-bottom: 10px;">
            <?= View::make('base.announcement.catalog', array('categories' => $categories)) ?>
            </div>
            <input style="width: 70%;" type="text" placeholder="Заголовок"><br/>
            <textarea style="width: 70%; height: 100px;" cols="" rows="" placeholder="Описание"></textarea>
          
    
  </div>
  <div class="modal-footer">
    <button class="btn btn-small btn-primary">Готово</button>
    <button class="btn btn-small" data-dismiss="modal" aria-hidden="true">Отмена</button>
  </div>
  </form>
</div>