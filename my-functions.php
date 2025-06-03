<?php
require_once('dbconnexion.php');

function calculTVA(float $prix, float $taux): float{
    return $prix * $taux/100;
}
function calculTTC(float $prix, float $taux): float{
    return $prix + calculTVA($prix, $taux);
}
function calculPromo(float $totalprice, float $discount): float{
    $realdiscount=1-($discount/100);
    $totalprice=$totalprice * $realdiscount;
    return $totalprice;
}
function calculPoids(int $poids, int $quantity): int{
    return $poids*$quantity;
}
function calculTotal(int $total, int $quantity): float{
    return $total*$quantity;
}
/*function addToCart(){
    $query = $mysqlClient->prepare(
        'INSERT INTO cart (customer_id, products_id, quantity, sessid) VALUES (:customerID, :productID, :quantity, :sessid)'
    );
}*/

?>