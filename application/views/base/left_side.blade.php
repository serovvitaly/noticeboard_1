<a class="button-place" href="/place/" data-toggle="modal" data-target="#modal-place">Разместить объявление</a>

<div class="accordion" id="accordion2">
<?
    if (isset($categories) AND isset($categories[0]) AND count($categories[0]) > 0) {
        foreach ($categories[0] AS $ctg) {
?>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_<?= $ctg->id ?>">
        <?= $ctg->name ?>
      </a>
    </div>
    <div id="collapse_<?= $ctg->id ?>" class="accordion-body collapse">
      <div class="accordion-inner">
        <ul>
        <?
            if (isset($categories[$ctg->id]) AND count($categories[$ctg->id]) > 0) {
                foreach ($categories[$ctg->id] AS $ctg_child) {
        ?>
            <li><a href="/cat/<?= Helper::lower( Helper::enstr($ctg_child->name) ) ?>"><?= $ctg_child->name ?></a></li>
        <?
                }
            }
        ?>
        </ul>
      </div>
    </div>
  </div>
<?
        }
    }
?>
</div>

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


<!-- Modal -->
<div id="modal-place" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="modal-place-label" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="brand" id="modal-place-label">Новое объявление</h4>
  </div>
  <ul class="modal-navbar">
      <li class="active"><a href="#">Содержимое</a></li>
      <li><i class="icon-chevron-right icon-white"></i><a href="#">Фотогалерея</a></li>
      <li><i class="icon-chevron-right icon-white"></i><a href="#">Завершение</a></li>
  </ul>
  <div class="modal-body">
    
              <form action="">
            <div style="padding-bottom: 10px;"><a href="#"  id="example200" class="btn btn-small dropdown-toggle" data-toggle="dropdown" rel="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Категория"><i class="icon-align-justify"></i> Категория</a></div>
            <input style="width: 70%;" type="text" placeholder="Заголовок"><br/>
            <textarea style="width: 70%; height: 100px;" cols="" rows="" placeholder="Описание"></textarea>
          </form>
    
  </div>
  <div class="modal-footer">
    <button class="btn btn-small" data-dismiss="modal" aria-hidden="true">Отмена</button>
    <button class="btn btn-small">Назад</button>
    <button class="btn btn-small">Далее</button>
    <button class="btn btn-small disabled btn-primary">Готово</button>
  </div>
</div>