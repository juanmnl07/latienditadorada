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
<div class="featuredproducts">
    <div class="container_16">
        <div class="grid_16">
            <h2 class="title">Productos destacados</h2>
            <img style="width: 630px;" src="<?php echo url('sites/all/themes/tiendadorada/images/shizzle.png', array('absolute' => TRUE)); ?>" alt="shizzle" class="shizzle" />
            <div class="controls">
                <a href="javascript:;" class="cprev"><img src="<?php echo url('sites/all/themes/tiendadorada/images/sright.png', array('absolute' => TRUE)); ?>" alt="" /></a>
                <a href="javascript:;" class="cnext"><img src="<?php echo url('sites/all/themes/tiendadorada/images/sleft.png', array('absolute' => TRUE)); ?>" alt="" /></a>
            </div>
            <div class="clear"></div>
            <?php print $list_type_prefix; ?>
            <?php foreach ($rows as $id => $row): ?>
                <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
            <?php endforeach; ?>
            <?php print $list_type_suffix; ?>
        </div>
    </div>
</div>