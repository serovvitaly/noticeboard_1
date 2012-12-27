<?

$style = isset($style) ? " btn-{$style}" : NULL;
$size  = isset($size)  ? " btn-{$size}"  : NULL;

$icon_left = $icon_right = NULL;

if (isset($icon)) {
    
    if (is_array($icon)) {
        $color = isset($icon['color']) ? " icon-{$icon['color']}" : NULL;
        
        $ico = '<i class="icon-' . $icon['type'] . $color . '"></i>';
        
        if (isset($icon['float']) AND $icon['float'] == 'right') {
            $icon_right = ' ' . $ico;
        } else {
            $icon_left  = $ico . ' ';
        }  
    }
    elseif (is_string($icon)) {
        $icon_left = '<i class="icon-' . $icon . '"></i> ';
    }

}
 
?>

<div class="btn-group open">
  <button class="btn dropdown-toggle{{ $style }}{{ $size }}" data-toggle="dropdown">{{ $icon_left }}{{ $caption }}{{ $icon_right }} <span class="caret"></span></button>
  <?
  if (isset($items) AND is_array($items) AND count($items) > 0) {
  ?>
  <ul class="dropdown-menu">
    <?
    foreach ($items AS $base_items) {
        if ($base_items == '-') {
        ?>
    <li class="divider"></li>
        <?
        }
        elseif (is_array($base_items)) {
            if (isset($base_items['items'])) {
            ?>
    <li class="dropdown-submenu">
      <a tabindex="-1" href="#">{{ $base_items['title'] }}</a>
      <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Second level link</a></li>
          <li><a tabindex="-1" href="#">Second level link</a></li>
          <li><a tabindex="-1" href="#">Second level link</a></li>
          <li><a tabindex="-1" href="#">Second level link</a></li>
          <li><a tabindex="-1" href="#">Second level link</a></li>
        </ul>
    </li>
            <?
            }
            else {
            ?>
    <li><a tabindex="-1" href="{{ $base_items['href'] }}">{{ $base_items['title'] }}</a></li>
            <?
            }
        }
    }
    ?>
  </ul>
  <?
  }
  ?>

</div>