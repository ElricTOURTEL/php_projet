<?php
function calculTVA(float $prix, float $taux=20): float{
    return $prix * $taux/100;
}
function calculTTC(float $prix, float $taux=20): float{
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
?>