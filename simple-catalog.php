<?php include('header.php');?>

<?php
$products= ["Iphone", "Galaxy S25", "Samsung Galaxy zfold"];
sort($products);
$lastproduct=count($products);
echo $products[$lastproduct-1] . "<br>";
for ($i = count($products); $i >= 0; $i--){
    echo $products[$i] . "<br>";
}
for ($i=0; $i < count($products); $i++){
    echo $products[$i] . "<br>";
}
?>

<?php include('footer.php')?>