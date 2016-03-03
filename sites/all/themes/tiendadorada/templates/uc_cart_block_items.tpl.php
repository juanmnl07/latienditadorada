<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$items = $variables['items'];
$class = $variables['collapsed'] ? 'cart-block-items collapsed' : 'cart-block-items';

// If there are items in the shopping cart...
if ($items) {
    $output = '<table style="display:none" class="' . $class . '"><tbody>';

    // Loop through each item.
    $row_class = 'odd';
    foreach ($items as $item) {
        // Add the basic row with quantity, title, and price.
        $output .= '<tr class="' . $row_class . '"><td class="cart-block-item-qty">' . $item['qty'] . '</td>'
                . '<td class="cart-block-item-title">' . $item['title'] . '</td>'
                . '<td class="cart-block-item-price">' . theme('uc_price', array('price' => $item['price'])) . '</td></tr>';

        // Add a row of description if necessary.
        if ($item['desc']) {
            $output .= '<tr class="' . $row_class . '"><td colspan="3" class="cart-block-item-desc">' . $item['desc'] . '</td></tr>';
        }

        // Alternate the class for the rows.
        $row_class = ($row_class == 'odd') ? 'even' : 'odd';
    }

    $output .= '</tbody></table>';
} else {
    // Otherwise display an empty message.
    $output = '<p class="' . $class . ' uc-cart-empty">' . t('There are no products in your shopping cart.') . '</p>';
}

echo $output;
?>
