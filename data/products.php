<?php
require_once 'my-functions.php';
/*$products = [
    "iphone" => [
        "name" => "Iphone",
        "price" => 450.0,
        "weight" => 200,
        "discount" => 10,
        "picture_url" => "https://www.pexels.com/fr-fr/photo/personne-tenant-un-ipad-noir-221185/"
    ],
    "samsungs25" => [
        "name" => "Samsung Galaxy s25",
        "price" => 750.0,
        "weight" => 275,
        "discount" => null,
        "picture_url" => "data:image/png;base64,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"
    ],
    "samsungzfold" => [
        "name" => "Samsung Galaxy z Fold",
        "price" => 1400.0,
        "weight" => 375,
        "discount" => 5,
        "picture_url" => "https://www.pexels.com/fr-fr/photo/personne-tenant-un-ipad-noir-221185/"
    ],
];
$tab=[];
foreach ($products as &$produit) {
    $produit["tva"] = calculTVA($produit["price"]);
    $produit["ttc"] = calculTTC($produit["price"]);
    if ($produit["discount"] != null) {
        $produit["promo_price"] = calculPromo($produit["ttc"], $produit["discount"]);
    }
    else{
        $produit["promo_price"]=$produit["ttc"];
    }
}*/
?>