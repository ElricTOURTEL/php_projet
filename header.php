<?php
session_start();
setcookie(
    'USER',
    'elric',
    [
        'expires' => time() + 365*24*3600,
        'secure' => true,
        'httponly' => true,
    ]
);
echo $_COOKIE['USER'];
require_once('my-functions.php');
?>
<?php
$title=basename($_SERVER['PHP_SELF']);
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