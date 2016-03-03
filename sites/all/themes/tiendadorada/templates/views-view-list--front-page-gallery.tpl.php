<?php
/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>
<div class="container_16">
    <div class="grid_16">
        <div class="sliderinner">
            <a href="javascript:;" class="slideprev">Previous</a>
            <a href="javascript:;" class="slidenext">Next</a>
            <?php print $list_type_prefix; ?>
            <?php foreach ($rows as $id => $row): ?>
                <li class="<?php print $classes_array[$id]; ?>">
                    <?php print $row; ?>
                </li>
            <?php endforeach; ?>
            <?php print $list_type_suffix; ?>
        </div>
        <div class="sliderout">
            <ul class="ftrd">
                <div class="thingy">
                    <img src="<?php echo url("sites/all/themes/tiendadorada/images/slidething.png", array('absolute' => TRUE)); ?>" alt="shizzle" class="handle" />
                </div>
                <?php
                foreach ($view->result as $key => $lenode): ?>
                    <li class="ftrd-lbl<?php echo ($key+1) ?>">
                        <h2><?php echo $lenode->node_title ?></h2>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
