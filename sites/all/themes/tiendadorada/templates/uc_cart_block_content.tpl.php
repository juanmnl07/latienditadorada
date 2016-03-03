<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$help_text = $variables['help_text'];
$items = $variables['items'];
$item_count = $variables['item_count'];
$item_text = $variables['item_text'];
$total = $variables['total'];
$summary_links = $variables['summary_links'];
$collapsed = $variables['collapsed'];

$output = '';

// Add the help text if enabled.
if ($help_text) {
    $output .= '<span class="cart-help-text">' . $help_text . '</span>';
}

// Add the summary section beneath the items table.
$output .= theme('uc_cart_block_summary', array('item_count' => $item_count, 'item_text' => $item_text, 'total' => $total, 'summary_links' => $summary_links));
// Add a table of items in the cart or the empty message.
$output .= theme('uc_cart_block_items', array('items' => $items, 'collapsed' => $collapsed));



echo $output;
?>
