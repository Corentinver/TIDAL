<?php
session_start();

require('./libs/smarty/Smarty.class.php');

try {
    $bdd = new PDO("mysql:host=f80b6byii2vwv8cx.chr7pe7iynqr.eu-west-1.rds.amazonaws.com;port=3306;dbname=c2as0sld1uv3e09n", "vyduy5wuyry0lrw1",  "hbtajkck31kwohut");
    $bdd->query("SET NAMES UTF8");
    $res = $bdd->query('Select * From Products');
    echo "<table border='1'>
    <tr>
    <th>Name<th>
    <th>Name<th>
    <th>Name<th>
    <tr>";
    foreach($res as $row){
      echo "<td>".$row['name']."<td>";
      echo "<td>".$row['price']."<td>";
      echo "<td>".$row['description']."<td>";
      echo "</br>";
    }
    echo "</table>";
    
} catch (Exception $e) {	
    echo $e + "\n";
    echo "Problème de connexion à la base de donnée !";
    die();
}



echo("Ça marche !!!");

include 'menu.php';

?>
