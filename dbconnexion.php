<?php
$servername="adminer.local";
$username="business";
$password="motdepasse";
try{
    $mysqlClient = new PDO(
    "mysql:host=$servername;dbname=database_hikeandcamp", $username, $password);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
    echo "connexion echoué";
};

?>