<!--
<div class="toolbar">
  <div class="btn-group">
    <button class="btn btn-small dropdown-toggle" data-toggle="dropdown"><i class="icon-align-justify"></i> Каталог <span class="caret"></span></button>
    <ul class="dropdown-menu">
    <?
        /*if (isset($categories) AND count($categories) > 0) {
            foreach ($categories AS $ctg) {
                echo '<li><a href="#">' . $ctg->name . '</a></li>';
            }
        }*/
    ?>
    </ul>
  </div>
  <div class="btn-group">
    <button class="btn btn-small" data-toggle="button"><i class="icon-picture"></i></button>
    <button class="btn btn-small"><i class="icon-search"></i></button>
    <button class="btn btn-small"><i class="icon-search"></i></button>
  </div>
</div>-->

<div class="container content">
    <div class="left-side">@include('base.left_side')</div>
    <div class="row" style="margin-left: 170px;">
      <div style="height: 40px; border-bottom: 1px solid #F0F0F0; margin-bottom: 10px;">
         
         <div class="input-append" style="float: left;">
              <input type="text" class="span4 search-query" placeholder="введите запрос для поиска">
              <button type="submit" class="btn"><i class="icon-search"></i></button>
            </div>
      
         <div class="pagination pull-right" style="margin: 0;">
              <ul>
                <li><a href="#">Назад</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">Вперед</a></li>
              </ul>
         </div>

         <!-- <div class="btn-group pull-right">
              <button class="btn btn-small" title="Назад"><i class="icon-chevron-left"></i></button>
              <div class="btn-group">
                <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">1 <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#page-2">2</a></li>
                  <li><a href="#page-3">3</a></li>
                  <li><a href="#page-4">4</a></li>
                </ul>
              </div>
              <button class="btn btn-small" title="Вперед"><i class="icon-chevron-right"></i></button>
          </div> -->
      </div>
      <?
       if (isset($announcements) AND count($announcements) > 0) {
           foreach ($announcements AS $ann) {
               echo View::make('base.announcement.item2', array('ann' => $ann));
           }
       }
      ?>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
    $('.announcements-item .image img')
        .mouseover(function(){
            $(this).parent('.image').children('.nb-popover-image').show();
        })
        .mouseout(function(){
            $(this).parent('.image').children('.nb-popover-image').hide();
        });
});
</script>