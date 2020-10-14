<?php

try {
    $bdd = new PDO("mysql:host=f80b6byii2vwv8cx.chr7pe7iynqr.eu-west-1.rds.amazonaws.com;port=3306;dbname=c2as0sld1uv3e09n", "vyduy5wuyry0lrw1",  "hbtajkck31kwohut");
    $bdd->query("SET NAMES UTF8");
    /*
     *
     *$res = $bdd->query('Select * From Products');
    echo "<table border='1'>
    <tr>
    <th>Name<th>
    <th>Name<th>
    <th>Name<th>
    <tr>";
    foreach($res as $row){
      echo "<tr>";
      echo "<td>".$row['name']."<td>";
      echo "<td>".$row['price']."<td>";
      echo "<td>".$row['description']."<td>";
      echo "</br>";
      echo "<tr>";
    }
    echo "</table>"; 
     */
    
} catch (Exception $e) {	
    echo $e + "\n";
    echo "Problème de connexion à la base de donnée !";
    die();
}



echo("Ça marche !!!");

//include 'menu.php';
include './config/config_init.php';


//Routing
if (isset($_GET['action']) && file_exists(_CTRL_.'action/'.str_replace('.', '', $_GET['action']).'.php'))
    include(_CTRL_.'action/'.$_GET['action'].'.php');

if (isset($_GET['page']) && file_exists(_CTRL_.str_replace('.', '', $_GET['page']).'.php'))
    include(_CTRL_.$_GET['page'].'.php');
else
    include(_CTRL_.'index.php');



// Templates
$smarty->display(_TPL_ . 'header.tpl');

if (isset($_GET['page']) && file_exists(_TPL_.'pages/'.str_replace('.', '', $_GET['page']).'.tpl'))
    $smarty->display(_TPL_.'pages/'.$_GET['page'].'.tpl');
else
    $smarty->display(_TPL_ . 'pages/index.tpl');

$smarty->display(_TPL_ . 'footer.tpl');

?>
