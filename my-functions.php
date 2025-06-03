<?php
/** */
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
/*class product{
    public function get_article(){
        $servername="adminer.local";
        $username="business";
        $password="motdepasse";
        try{
            $mysqlClient = new PDO(
            "mysql:host=$servername;dbname=database_hikeandcamp", $username, $password);
            $productdbList=$mysqlClient->('SELECT * FROM products');
        }
    }    
}*/
?>