<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$item_count = $variables['item_count'];
$item_text = $variables['item_text'];
$total = $variables['total'];
$summary_links = $variables['summary_links'];
//print_r($summary_links)
?>

<ul>
    <li>   
        <a href="<?php echo url("cart", array('absolute' => TRUE)); ?>">
            <span class="wrapcart">
                <?php echo theme('uc_price', array('price' => $total)) ?>
            </span>
        </a>
    </li>
    <?php
    global $user;
    if ($user->uid):
        ?>
        <li><a class="myacc" href="<?php echo url("user/logout", array('absolute' => TRUE)); ?>">Cerrar sesión</a></li>
        <li><a class="myacc" href="<?php echo url("user/me", array('absolute' => TRUE)); ?>">Mi cuenta</a></li>
    <?php endif; ?>
    <li><a class="myshop" href="<?php echo url("cart", array('absolute' => TRUE)); ?>">Mi carrito</a></li>
    <li><a class="mycheck" href="<?php echo url("cart/checkout", array('absolute' => TRUE)); ?>">Comprar</a></li>
</ul>
