<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Formular</title>
  </head>
  <body>
<?php

session_start();
$datum = date("d.F.Y");

if ($_SESSION['eingeloggt'] == false)
{
?>
    <section class="container">
      <div class="row">
        <h1><center>Registration</h1></center>

        <div class="col-md-12">

          <form action="formular.php" method="post">
  				<input type="text" name="vorname" value="<?=@$_POST['vorname']?>"  class="form-control" placeholder="Vornamen"/><br>
  				<input type="text" name="nachnamen" value="<?=@$_POST['nachnamen']?>"  class="form-control" placeholder="Nachnamen"/>
  				<br>
  				<input type="email" name="email" class="form-control" placeholder="Email"/>
  				<br>
          <input type="password" name="password" value="<?=@$_POST['password']?>"  class="form-control" placeholder="Passwort"/><br>
  				<input type="password" name="passwordcontrol" value="<?=@$_POST['passwordcontrol']?>" class="form-control" placeholder="Passwort bestätigen"/><br>
  			    <button type="submit" value="übermitteln" class="form-control btn btn-success" /> Absenden
  			    </button>
          </div>
<?php
            }

            if(empty($_SESSION['vorname']) == TRUE && $_SESSION['eingeloggt'] == false)
  					{
  						echo "Bitte geben Sie Ihren Vor- und Nachnamen ein!" . "<br>";
  					}
  					else
  					{
  						if($_POST['vorname'] != "" && $_POST['nachnamen'] != "")
  						{
  							echo "Der Eingetragene Vorname ist: ". "<em>" . $_POST['vorname'] ."</em><br>";
  							echo "Der Eingetragene Nachnamen ist: ". "<em>". $_POST['nachnamen'] . "</em><br>";
              }


              if(empty($_POST['password']) == TRUE && empty($_POST['passwordcontrol'] == TRUE))
              {
                echo "Bitte geben Sie ein Passwort ein!";
              }
              elseif(($_POST['password']) == ($_POST['passwordcontrol']))
              {
                echo "<strong>" . "Passwörter stimmen überein!" . " </strong><br>";
                $_SESSION['eingeloggt'] = TRUE;
                      if ($_SESSION['eingeloggt']==TRUE)
                      {
                        echo "<br>Anmeldung erfolgreich!";
                       echo "<br>$datum";
                      }
              }
              else
      				{
      				 echo "<strong>" . "Passwörter sind nicht gleich!" . " </strong><br>";
      				 $_SESSION['eingeloggt'] = false;
      				}
            }
            ?>



      </div>
    </section>


  </body>
</html>
