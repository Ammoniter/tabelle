
test
<?php
$Datenbank = new mysqli("localhost","root","","Registration"); /*Verbindung zu der Datenbank(benutzerkonto)
 auf Localhost mit dem Benutzer Root, welcher kein Passwort hat.*/


 $Datenbank->query("INSERT INTO benutzerdaten ("Vornamen", Nachnamen", "E-Mail", "Telefonnummer", "Passwort", "Geschlecht") VALUES ('ruedi', 'muurer', 'ruedi@ruedi.ch', '354351351', 'lul', 'Männlich')");

 $Datenbank->query("INSERT INTO benutzerdaten (Newsletter per Post, Newsletter per E-Mail, Newsletter per SMS) VALUES ('Post', '', '') ");

  ?>
