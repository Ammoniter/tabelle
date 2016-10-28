<?php
$db = new mysqli("localhost", "root", "", "benutzerkonto");

?>
<html>
<head>
	<title>Formular</title>
	<script   src="https://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
	<script src="script.js"></script>
	<link href="style.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>
<body>
	<section class="container">
		<div class="row">
			<h1><center>Registration</h1></center>
			 <?php
			 	session_start();
			 ?>


			<div class="col-md-12">

				<form id="myForm" action="formular.php" method="post">
				<input id="vorname" type="text" name="vorname" value="<?=@$_POST['vorname']?>"  class="form-control" placeholder="Vornamen"/><br>
				<input id="nachnamen" type="text" name="nachnamen" value="<?=@$_POST['nachnamen']?>"  class="form-control" placeholder="Nachnamen"/>
				<br>
				<input id="email" type="email" name="email" class="form-control" value="<?=@$_POST['email']?>" placeholder="Email"/>
				<br>
				<input id="number" type="number" name="tel" class="form-control" value="<?=@$_POST['tel']?>" placeholder="Telefonnummer">
				<br>

				<input id="password" type="password" name="password" value="<?=@$_POST['password']?>"  class="form-control" placeholder="Passwort"/><br>
				<input type="password" name="passwordcontrol" value="<?=@$_POST['passwordcontrol']?>" class="form-control" placeholder="Passwort bestätigen"/><br>
				<input type="radio" name="Sex">männlich</input><br>
				<input type="radio" name="Sex">weiblich</input><br>
				<input type="radio" name="Sex">anderes</input><br>

				<div class="checkbox">
  <label><input type="checkbox" value="">Option 2</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="">Option 2</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="">Option 2</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">Option 1</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">Option 2</label>
</div>
<div class="radio disabled">
  <label><input type="radio" name="optradio" disabled>Option 3</label>
</div>

					<button onclick='getConfirmation(this.value);' type="submit" value='übermitteln' class="form-control btn btn-success" /><i class="fa fa-paper-plane" aria-hidden="true"></i> Absenden
			    </button>
			</div>
			<div class="col-md-12">
				<?php

        $datum = date("d.F.Y");
					if(empty($_POST['vorname']) == TRUE)
					{
						$error = true;
						echo "Bitte geben Sie Ihren Vor- und Nachnamen ein!" . "<br>";
					}
					else
					{
						if($_POST['email'] != "")
						{
							echo "Der Eingetragene Vorname ist: ". "<em>" . $_POST['email'] ."</em><br>";
						}
						if($_POST['vorname'] != "")
						{
							echo "Der Eingetragene Vorname ist: ". "<em>" . $_POST['vorname'] ."</em><br>";
						}
						if($_POST['nachnamen'] != "")
						{
							echo "Der Eingetragene Nachnamen ist: ". "<em>". $_POST['nachnamen'] . "</em><br>";		}
					}
				if(empty($_POST['password']) && empty($_POST['passwordcontrol']))
				{
					$error = true;
					echo "Bitte geben Sie ein Passwort ein!";
				}
				elseif(($_POST['password']) == ($_POST['passwordcontrol']))
				{
					echo "<strong>" . "Passwörter stimmen überein!" . " </strong><br>";
					$_SESSION['eingeloggt'] = TRUE;
        			  if ($_SESSION['eingeloggt']==TRUE) {
          			  echo "<br>Anmeldung erfolgreich!";
           			 echo "<br>$datum" . "<br>";}
				}
				else
				{
					$error = true;
				 echo "<strong>" . "Passwörter sind nicht gleich!" . " </strong><br>";
				 $_SESSION['eingeloggt'] = false;
				}


				$check = $db->query("SELECT * FROM benutzerdaten WHERE Nachnamen = '".$_POST['nachnamen']."' ");
				if($check->num_rows > 0)
				{
					$error = true;
					echo 'Dieser Benutzer existiert bereits!' . '<br>';
				}

				if(@$error == false)
				{
					$db->query("INSERT INTO benutzerdaten (Vornamen, Nachnamen, Email, Passwort) VALUES ('".$_POST['vorname']."', '".$_POST['nachnamen']."', '".$_POST['email']."', '".$_POST['passwordcontrol']."') ");
				}
				if ($db->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				}

				$sql = "SELECT Vornamen, Nachnamen, Email, Passwort FROM benutzerdaten";
				$result = $db->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo "<strong>Name:</strong> <tr><td>" . $row["Vornamen"].  " </td><strong>Nachnamen:</strong> <td>" . $row["Nachnamen"].  " </td><strong>Email:</strong> <td>" . $row["Email"].  " </td><strong>Passwort:</strong> <td>" . $row["Passwort"]. "</td></tr><br>";
				    }
				} else {
				    echo "0 results";
				}
				 if(@$_SESSION['eingeloggt'] == TRUE)
     			{
       			 echo "Sie sind eingeloggt!!!";
        		?>
       			 <form action="formular.php" method="post">
       			<input type="hidden" name="logout" value="0"/>
        		<button type="submit" value="1" name="logout" class="form-control btn btn-success" /> logout
			    </button>
					<button type="button" value="1" name="logout" class="form-control btn btn-info" /> logout
				</button>
			    </form>
			    <?php
					if(($_POST['logout']) == 1)
					{
						echo "Sie sind abgemolden";
						$_SESSION['eingeloggt'] = false;
					}
     			 }

				?>


			</div>
		</div>
	</section>
</body>
</form>
