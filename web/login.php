<?php
session_start();
if(isset($_SESSION['user'])){
	echo '<input type="sumbit" value="Déconnexion">';
}
else{

	echo '<input type="submit" name="connect_button" value="Se connecter">';
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
