<?php include('header.php'); ?>

<?php /*echo var_dump($_POST["quantity"]);*/
require_once('data/products.php');
require_once('my-functions.php'); ?>
<div class="container my-5">
    <div class="row g-4">
        <?php foreach ($_POST["quantity"] as $productName => $quantite): ?>
            <?php if ((int)$quantite > 0): ?>
                <?php foreach ($products as $product): ?>
                    <?php if ($product["name"] === $productName): ?>
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title"><?= htmlspecialchars($product["name"]) ?></h5>

                                    <p class="card-text mb-1">Quantité : <?= htmlspecialchars($quantite) ?></p>
                                    <p class="card-text mb-1">Prix unitaire : <?= htmlspecialchars($product["promo_price"]) ?> €</p>

                                    <?php $product["total_weight"] = htmlspecialchars(calculPoids($product["weight"], $quantite)); ?>
                                    <p class="card-text mb-1">Poids total : <?= htmlspecialchars($product["total_weight"]) ?></p>

                                    <?php $product["total_price"] = htmlspecialchars(calculPoids($product["promo_price"], $quantite)); ?>
                                    <p class="card-text mb-1">Prix total : <?= htmlspecialchars($product["total_price"]) ?> €</p>

                                    <?php
                                    if ($product["total_weight"] <= 500) {
                                        $product["transport_price"] = 5;
                                    } else if ($product["total_weight"] > 500 && $product["total_weight"] < 2000) {
                                        $product["transport_price"] = $product["total_price"] * 0.1;
                                    } else {
                                        $product["transport_price"] = 0;
                                    }
                                    ?>
                                    <p class="card-text mb-1">Prix transporteur : <?= htmlspecialchars($product["transport_price"]) ?> €</p>
                                    <p class="card-text fw-bold">Total commande : <?= htmlspecialchars($product["transport_price"] + $product["total_price"]) ?> €</p>
                                </div> <!-- card-body -->
                            </div> <!-- card -->
                        </div> <!-- col-md-4 -->
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div> <!-- row -->
</div> <!-- container -->
                            <?php include('footer.php'); ?>