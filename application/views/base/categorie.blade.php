<div class="toolbar">
  <div class="btn-group">
    <button class="btn btn-small dropdown-toggle" data-toggle="dropdown"><i class="icon-align-justify"></i> Каталог <span class="caret"></span></button>
    <ul class="dropdown-menu">
    <?
        if (isset($categories) AND count($categories) > 0) {
            foreach ($categories AS $ctg) {
                echo '<li><a href="#">' . $ctg->name . '</a></li>';
            }
        }
    ?>
    </ul>
  </div>
  <div class="btn-group">
    <button class="btn btn-small" data-toggle="button"><i class="icon-picture"></i></button>
    <button class="btn btn-small"><i class="icon-search"></i></button>
    <button class="btn btn-small"><i class="icon-search"></i></button>
  </div>
</div>

<div class="row announcements-list">
  <?
   if (isset($announcements) AND count($announcements) > 0) {
       foreach ($announcements AS $ann) {
           echo View::make('base.announcement.item', array('ann' => $ann));
       }
   }
  ?>
</div>

<div class="announcements-list-pagination">
  PAGINATION
</div>