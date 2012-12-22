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

<div class="container-fluid content">
    <div class="left-side">@include('base.left_side')</div>
    <div class="row" style="margin-left: 232px;">
      <div style="height: 60px; border-bottom: 1px solid #F0F0F0; margin-bottom: 10px;"></div>
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