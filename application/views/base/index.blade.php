<div class="row" id="main-catalog-list">
  <div class="span4">
  <?
      $counter = 1;
      if (count($catalog) > 0) {
          foreach ($catalog AS $ctg_id => $ctg) {
  ?>
    <h4><?= $ctg['name'] ?></h4>
    <ul>
      <?
              if (isset($ctg['items']) AND count($ctg['items']) > 0) {
                  foreach ($ctg['items'] AS $ctg_item_id => $ctg_item) {
      ?>
      <li><a href="/ctg_<?= Helper::lower( Helper::enstr($ctg_item['name']) ) ?>"><?= $ctg_item['name'] ?></a></li>
      <?
                  }
              }
      ?>
    </ul>
  <?
              if ($counter == 3) {
                  echo '</div><div class="span4">';
                  $counter = 0;
              }
              
              $counter++;
          } 
      }
  ?>
  </div>
</div>