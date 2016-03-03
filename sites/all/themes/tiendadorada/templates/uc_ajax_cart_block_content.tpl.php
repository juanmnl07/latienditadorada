<?php
/**
 * @file
 *
 * Theme file for non empty cart.
 */
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
