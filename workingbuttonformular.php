<html>
<head>
    <title>Formulare</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <section class="container">
    <div class="row">

      <h1>Mein Formular</h1>


      <?php
      session_start();


      if (@$_SESSION['eingeloggt'] && @$_POST['logout'] == 1)
      {
        $_SESSION['eingeloggt'] = false;
        $_POST['logout'] = 0;
      }



      if(@$_SESSION['eingeloggt'] == TRUE)
      {
        echo "Sie sind eingeloggt!!!";
        ?>
        <div class="col-md-12">
          <form action="formular.php"method="post">
            <button type="submit" value="1" name="logout" class="form-control btn btn-success" /> logout
			      </button>



          </form>
        </div>
        <?php
      }
      else
      {
        ?>
      <div class="col-md-12">
        <form action="formular.php"method="post">
          <input type="text" name="vorname" value="<?=@$_POST['vorname']?>" class="form-control" placeholder="Vorname">
          <input type="password" name="password" value="<?=@$_POST['password']?>" class="form-control" placeholder="Passwort">
          <input type="password" name="passwordcontrol" value="<?=@$_POST['passwordcontrol']?>" class="form-control" placeholder="Passwort bestätigen">
          <br>
          <button type="submit" value="absenden" class="form-control btn
          btn-default">Absenden</button>

        </form>
      </div>
      <div class="col-md-12">
        <?php


        $datum = date("d.F.Y");
        if ( empty ($_POST['vorname']) == TRUE ){
          echo "Bitte geben Sie Ihren Vornamen ein.";

        }
        else {
          echo "Eingetragener Vorname: ". @$_POST['vorname'];
        }

        ?>
      <div class ="col-md-12">
        <?php
        if ( empty ($_POST['password']) == TRUE ){
          echo "Bitte geben Sie ein Passwort ein.";
        }
        elseif ((@$_POST['password']) == (@$_POST['passwordcontrol'])){
          echo "Passwörter stimmen überein";
          $_SESSION['eingeloggt'] = TRUE;
          if ($_SESSION['eingeloggt']==TRUE) {
            echo "<br>Anmeldung erfolgreich!";
            echo "<br>$datum";

          }


        }
        else {
          echo "Passwörter stimmen nicht überein!";
          $_SESSION['eingeloggt'] = false;
        }
      }
        ?>
    </div>
  </section>
</body>
</html>
