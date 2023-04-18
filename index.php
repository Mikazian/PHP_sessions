<?php

session_start();

require 'inc/data/products.php';
require 'inc/head.php';

// vérifier si GET est définie
if (isset($_GET['add_to_cart'])) {

    // vérifier si SESSION possède un tableau 'cookies', si non, créer là
    if (!isset($_SESSION['cookies'])) {
        $_SESSION['cookies'] = array();
    }

    // récupération de l'ID des cookies
    $id = $_GET['add_to_cart'];

    // ajouter les cookies dans la variable super globale 'cookies'
    array_push($_SESSION['cookies'], $catalog[$id]['name']);
}

var_dump($_SESSION['cookies']);
var_dump($catalog[$id]['name']);

// session_destroy();
// header('Location: /');

?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $_SESSION['cookieName'] = $cookie['name']; ?></h3>

                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>