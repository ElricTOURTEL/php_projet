<?php include('header.php'); ?>

<?php
require_once 'data/products.php';
?>
<form method="post" action="cart.php">
    <div class="container my-5">
        <div class="row g-4">
            <?php foreach ($products as $product): ?>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="<?= htmlspecialchars($product["picture_url"]) ?>" class="card-img-top" alt="<?= htmlspecialchars($product["name"]) ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($product["name"]) ?></h5>
                            <p class="card-text mb-1">Prix HT : <?= htmlspecialchars($product["price"]) ?> €</p>
                            <p class="card-text mb-1">Poids : <?= htmlspecialchars($product["weight"]) ?> g</p>
                            <p class="card-text mb-1">TVA (20%) : <?= htmlspecialchars($product["tva"]) ?> €</p>
                            <p class="card-text mb-1">Prix TTC : <?= htmlspecialchars($product["ttc"]) ?> €</p>

                            <?php if ($product["discount"] !== null): ?>
                                <p class="card-text text-success fw-bold">
                                    Prix remisé : <?= htmlspecialchars($product["promo_price"]) ?> €
                                </p>
                            <?php endif; ?>

                            <div class="mt-3">

                                <label for="quantity_<?= htmlspecialchars($product["name"]) ?>" class="form-label">Quantité :</label>
                                <input type="number" name="quantity[<?= htmlspecialchars($product["name"]) ?>]" id="quantity_<?= htmlspecialchars($product["name"]) ?>" class="form-control" min="0" value="0">
                                <button type="submit" class="btn btn-primary btn-lg">Commander</button>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</form>




<?php /*

<div class="container my-5">
    <div class="row g-4">
        <?php $productsList = array_values($products);
        for($i = 0; $i < count($products); $i++):
        $product=$productsList[$i]; ?>
            <div class="col-md-4">
                <div class ="card h-100">
                    <img src="<?= htmlspecialchars($product["picture_url"])?>" class="card-img-top" alt="<?= htmlspecialchars($product["name"])?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($product["name"]) ?></h5>
                        <p class="card-text">Prix: <?= htmlspecialchars($product["price"]) ?></p>
                        <p class="card-text">Poids: <?= htmlspecialchars($product["weight"]) ?></p>
                        <p class="card-text">
                        <?= $product["discount"] ? "Remise : {$product["discount"]}%": "Aucune remise pour ce produit" ?></p>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
    </div>
</div> */ ?>
<?php /*


<div class="container my-5">
    <div class="row g-4">
        <?php $productsList = array_values($products);
        $i=0;
        while($i < count($products)):
        $product=$productsList[$i]; ?>
            <div class="col-md-4">
                <div class ="card h-100">
                    <img src="<?= htmlspecialchars($product["picture_url"])?>" class="card-img-top" alt="<?= htmlspecialchars($product["name"])?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($product["name"]) ?></h5>
                        <p class="card-text">Prix: <?= htmlspecialchars($product["price"]) ?></p>
                        <p class="card-text">Poids: <?= htmlspecialchars($product["weight"]) ?></p>
                        <p class="card-text">
                        <?= $product["discount"] ? "Remise : {$product["discount"]}%": "Aucune remise pour ce produit" ?></p>
                        <?php
                        $i++;
                        ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
    </div>
</div> */ ?>

<?php include('footer.php'); ?>