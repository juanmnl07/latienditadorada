<?php
/**
 * @file
 *
 * Theme file for an empty cart.
 */
?>
<ul>
    <li>   
        <div id="cart-block-contents-ajax" class="cart-empty">
            No hay productos en su carrito de compra.
        </div>
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
