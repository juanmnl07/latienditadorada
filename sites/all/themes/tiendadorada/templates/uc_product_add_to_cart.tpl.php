<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$form = $variables['form'];

$output = '<div class="add-to-cart">';
$output .= drupal_render($form);
$output .= '</div>';

echo $output;
?>
