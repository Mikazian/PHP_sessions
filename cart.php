<?php

session_start();

require 'inc/head.php';
require 'inc/data/products.php';

?>
<section class="cookies container-fluid">
    <div class="row">
        <!-- TODO : Display shopping cart items from $_SESSION here. -->
        <ul>
            <?php foreach ($_SESSION['cookies'] as $cookie) : ?>
                <li><?= $cookie ?></li>
            <?php endforeach ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>