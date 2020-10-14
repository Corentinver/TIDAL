<?php 
session_start();
header("Cache-Control: no-cache");

// Chargement Smarty et Defines
require('defines.inc.php');
require(_PATH_ . 'web/tools/smarty/Smarty.class.php');

// Chargement du coeur
$files = scandir(_MODEL_);
foreach ($files as $filename)
{
    if (is_file(_MODEL_.$filename))
        require_once(_MODEL_.$filename);
}

// Connexion Database
try {
    $bdd = new PDO("mysql:host=f80b6byii2vwv8cx.chr7pe7iynqr.eu-west-1.rds.amazonaws.com;port=3306;dbname=c2as0sld1uv3e09n", "vyduy5wuyry0lrw1",  "hbtajkck31kwohut");
    $bdd->query("SET NAMES UTF8");
} catch (Exception $e) {
    echo "Problème de connexion à la base de donnée PixyJob...";
    die();
}

// Initialisation Smarty
$smarty = new Smarty();

?>