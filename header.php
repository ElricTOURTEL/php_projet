<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('my-functions.php');
/*require_once('data/products.php');*/
require_once('dbconnexion.php');
//$_SESSION=[];
//$_GET=[];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION = $_POST;
    if(!empty($_SESSION)){
        $productID=array_key_first(($_SESSION));
        $quantity=(int)$_SESSION[$productID];
        if($quantity>0){
            if($productID==$mysqlClient->query('SELECT products_id FROM cart'))
            $query = $mysqlClient->prepare(
                'INSERT INTO cart (customer_id, products_id, quantity, sessid) VALUES (:customerID, :productID, :quantity, :sessid)'
            );
            $query->execute([
                'customerID' => 1,
                'productID' => $productID,
                'quantity' => $quantity,
                'sessid' => session_id()
            ]);
            unset($_SESSION);
        }

    }
}
?>

<?php
$title = basename($_SERVER['PHP_SELF']);
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Hike & Camp: <?php echo ucfirst(pathinfo($title, PATHINFO_FILENAME)); ?></title>
    <meta name="description" content="Bienvenue sur le site de Hike & Camp version PHP vous êtes sur la page <?php echo ucfirst(pathinfo($title, PATHINFO_FILENAME)); ?>"
        <link rel="icon" type="image/x-icon" href="./Images/Logo.png">
</head>

<body>
    <header>
        <ul class="nav justify-content-around navheader bg-primary sticky-top align-items-center">
            <li class="nav-item">
                <a href="index.php"><img src="Images/Logo.png" class="img-fluid logo" alt="logo"></a>
            </li>
            <li class="nav-item">
                <h1 class="marque">Hike & Camp</h1>
            </li>
            <li class="nav-item d-flex flex-row">
                <a class="nav-link fs-3 text-dark" href="equipe.php">Equipe</a>
                <a class="nav-link fs-3 text-dark" href="contact.php">Contact</a>
                <a class="nav-link fs-3 text-dark" href="catalogue.php">Catalogue</a>

            </li>

        </ul>
    </header>