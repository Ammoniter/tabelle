<?php
$Datenbank = new mysqli("localhost","root","","benutzerkonto"); /*Verbindung zu der Datenbank(benutzerkonto)
 auf Localhost mit dem Benutzer Root, welcher kein Passwort hat.*/
 ?>
 <html>
 <head>
    <title>Formular</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous"><!-- Formatierungen von Boostrap-->
  </head>
  <body>
    <section class="container">
        <div  class="row">
          <h1><center>Registration</h1></center>
          <?php
          session_start()
           ?>

           <div class="col-md-12">
             <form action="ende.php" method="post">
             <input type="text" name="vorname" value="<?=@$_POST['vorname']?>"  class="form-control" placeholder="Vornamen"/><br>
             <!--Input felder sind Fleder in denen Text eingeben werden kann. Je nach Typ werden andere Anforderungen aktiv(z.B. Email ->@). ) -->
             <input type="text" name="nachnamen" value="<?=@$_POST['nachnamen']?>"  class="form-control" placeholder="Nachnamen"/><br>
             <input type="email" name="email" class="form-control" value="<?=@$_POST['email']?>" placeholder="Email"/><br>
             <input type="number" name="tel" class="form-control" value="<?=@$_POST['tel']?>" placeholder="Telefonnummer"><br>
             <input type="password" name="password" value="<?=@$_POST['password']?>"  class="form-control" placeholder="Passwort"/><br>
             <input type="password" name="passwordcontrol" value="<?=@$_POST['passwordcontrol']?>" class="form-control" placeholder="Passwort bestätigen"/><br>
             <div class="radio">
               <h4>Geschlecht</h4>

                <!-- type radio gibt felder zum anklicken an, wobei nur ein auswählbar ist. -->

               <label><input type="radio" name="optradio">männlich</label>
             </div>
             <div class="radio">
               <label><input type="radio" name="optradio">weiblich</label>
             </div>
             <div class="radio disabled">
               <label><input type="radio" name="optradio" disabled>anderes</label>
             </div>
             <h4>Newsletter abonieren per</h4>

             <!-- Felder zum anklicken -->

             <div class="checkbox">
                <label><input type="checkbox" value="">Post</label>
             </div>
             <div class="checkbox">
               <label><input type="checkbox" value="">E-Mail</label>
             </div>
             <div class="checkbox">
               <label><input type="checkbox" value="">SMS</label>
             </div>
                <button type="submit" value="übermitteln" class="form-control btn btn-success"> Absenden </button>
               </div>
           <?php
           if(empty($_POST['vorname']) == TRUE || empty($_POST['nachnamen']) == TRUE
           || empty($_POST['email']) == TRUE || empty($_POST['password']) == TRUE
           || empty($_POST['passwordcontrol']) == TRUE
           || empty($_POST['tel']) == TRUE)
           {
           			echo "Bitte alle Angaben eingeben!" . "<br>";
                /*Gibt die Fehlermeldung aus "Bitte geben Sie Ihren V... aus. Es kontrolliert
                ob die Variabeln einen Inhalt beinhalten, wenn eine keinen
                Inhalt hat gibt es die Fehlermeldung aus */
           	}
              elseif(($_POST['password']) == ($_POST['passwordcontrol']))
              {
                echo "<strong>" . "Passwörter stimmen überein!" . " </strong><br>";
                $_SESSION['eingeloggt'] = TRUE;
                      if ($_SESSION['eingeloggt']==TRUE) {
                        echo "<br>Anmeldung erfolgreich!<br>";}
                        if($_POST['email'] != "")
            						{
            							echo "Die Benutzerdaten sind:<br>" . "<em>" . $_POST['vorname'] . "<br>" . $_POST['nachnamen'] ."<br>" . $_POST['email'] . "<br>" . $_POST['passwordcontrol'] ."</em><br>";
            						}
              }
              else
              {
                $error = true;
               echo "<strong>" . "Passwörter sind nicht gleich!" . " </strong><br>";
               $_SESSION['eingeloggt'] = false;
              }



            ?>
