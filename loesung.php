<?php

session_start();  if ( $_POST['benutzername'] != "" AND $_POST['kennwort'] != "" ) {
	if (          $_POST['benutzername'] == "benutzer"          AND    $_POST['kennwort'] == "passwort") {         $_SESSION['benutzername'] = $_POST['benutzername'];         $_SESSION['eingeloggt'] = true;         echo "Anmeldung erfolgreich!";     } else {         echo "Eingabe ungueltig";         $_SESSION['eingeloggt'] = false;     } }
	if ( $_SESSION['eingeloggt'] == true ) {     echo "Hallo ". $_SESSION['benutzername']; } else { echo "Bitte melden Sie sich an";     echo '<form action="" method="POST" >';     echo '<p>Benutzername:<br />';     echo '<input type="text" name="benutzername" value="" />';     echo '<p>Kennwort:<br />';     echo '<input type="password" name="kennwort" value="" />';     echo '<p><input type="Submit" value="einloggen" />';     echo '</form>';

?>