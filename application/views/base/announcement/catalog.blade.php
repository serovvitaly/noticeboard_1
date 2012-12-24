<div class="btn-group">
<a href="#" style="display: block; width: 116px;" class="btn btn-small dropdown-toggle" data-toggle="dropdown" ><i class="icon-align-justify"></i> Категория</a>
<ul class="dropdown-menu">
<?
    if (isset($categories) AND isset($categories[0]) AND count($categories[0]) > 0) {
        foreach ($categories[0] AS $ctg) {
?>
    <li class="dropdown-submenu foo">
        <a tabindex="-1" href="#" class="base-ctg"><?= $ctg->name ?></a>
        <ul class="dropdown-menu">
        <?
            if (isset($categories[$ctg->id]) AND count($categories[$ctg->id]) > 0) {
                foreach ($categories[$ctg->id] AS $ctg_child) {
        ?>
            <li><a tabindex="-1" id="ctg-<?= $ctg_child->id ?>" href="/cat/<?= Helper::lower( Helper::enstr($ctg_child->name) ) ?>"><?= $ctg_child->name ?></a></li>
        <?
                }
            }
        ?>
        </ul>
    </li>
<?
        }
    }
?>
</ul>
</div>