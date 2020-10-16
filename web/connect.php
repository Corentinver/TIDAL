<?php
session_start();
if(isset($_POST)){
	echo "ID :".$_POST['ID'];
	echo "PASS :".$_POST['PASS'];
	$hash = md5($_POST['PASS']);
	session_start();
	
	require('./libs/smarty/Smarty.class.php');
	
	try {
	    	$bdd = new PDO("mysql:host=f80b6byii2vwv8cx.chr7pe7iynqr.eu-west-1.rds.amazonaws.com;port=3306;dbname=c2as0sld1uv3e09n", "vyduy5wuyry0lrw1",  "hbtajkck31kwohut");
	    	$bdd->query("SET NAMES UTF8");
		$res = $bdd->prepare('Select firstname,familyname From Customers WHERE username="'.$_POST['ID'].'" AND password="'.$hash.'"');
		$res->execute();
		$res = $res->fetch(PDO::FETCH_OBJ);
		#echo $res->firstname." ".$res->familyname;
		$_SESSION['user'] = $_POST['ID'];

	} catch (Exception $e) {
	    echo $e + "\n";
	    echo "Problème de connexion à la base de donnée !";
	    die();
	}
}
?>

