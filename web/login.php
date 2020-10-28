<?php
session_start();
if(isset($_SESSION['user'])){
	echo '<p>Bienvenue '.$_SESSION['firstname'].''.$_SESSION['familyname'].'</p>
	<form method="post" action="disconnect.php">
		<input type="submit" value="Déconnexion">
	</form>';
}
else{

	echo '<form method="post">
		<input type="submit" name="connect_button" value="Se connecter">
	</form>';
	if(array_key_exists('connect_button', $_POST)) {
            connect_button();
        }	
}

function connect_button() {
        echo '<form method="post" action="connect.php">
       		<input type="text" name="ID">
       		<input type="password" name="PASS">
       		<input type="submit" value="Connexion" name="Connexion"> 
	</form>';
}

/*
<input type="button" value="Se connecter">
<form method="post" action="connect.php">
        <input type="text" name="ID">
        <input type="password" name="PASS">
        <input type="submit" value="Connexion" name="Connexion"> 
</form>
<input type="button" value="Déconnexion">*/
