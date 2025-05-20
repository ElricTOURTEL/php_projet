<?php include('header.php'); ?>

<?php /*echo var_dump($_POST["quantity"]);*/
require_once ('data/products.php');
require_once ('my-functions.php');
foreach ($_POST["quantity"] as $productName => $quantite) {
    if ((int)$quantite > 0) {
        foreach ($products as $product) {
            if ($product["name"] === $productName) {
                echo "Produit : " . htmlspecialchars($productName) . " - Quantité : " . (int)$quantite . "<br>";
                echo "Poids total : " . htmlspecialchars(calculPoids($product["weight"], $quantite)) . "<br>";
            }
        }
    }

}


?>

<?php include('footer.php'); ?>