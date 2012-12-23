<div class="btn-group">
<a href="#" style="display: block;" class="btn btn-small dropdown-toggle" data-toggle="dropdown" ><i class="icon-align-justify"></i> Категория <span class="caret"></span></a>
<ul class="dropdown-menu">
<?
    if (isset($categories) AND isset($categories[0]) AND count($categories[0]) > 0) {
        foreach ($categories[0] AS $ctg) {
?>
    <li class="dropdown-submenu">
        <a tabindex="-1" href="#"><?= $ctg->name ?></a>
        <ul class="dropdown-menu">
        <?
            if (isset($categories[$ctg->id]) AND count($categories[$ctg->id]) > 0) {
                foreach ($categories[$ctg->id] AS $ctg_child) {
        ?>
            <li><a tabindex="-1" href="/cat/<?= Helper::lower( Helper::enstr($ctg_child->name) ) ?>"><?= $ctg_child->name ?></a></li>
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