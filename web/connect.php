<form method="post" action="connect.php">
	<input type="text" name="ID">
	<input type="password" name="PASS"> 
	<input type="submit" value="Connexion" name="Connexion"> <!-- assign a name for the button -->
</form>

<?php

if(isset($_POST)){
	echo "ID ".$_POST['ID'];
	echo "ID ".$_POST['PASS'];
}
?>
