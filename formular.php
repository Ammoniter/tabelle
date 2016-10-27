<html>
<head>
	<title>Formular</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<section class="container">
		<div class="row">
			<h1>Registration</h1>
			<div class="col-md-12">

				<form action="formular.php" method="post">
				<input type="text" name="vorname" /*value="<?=@$_POST['vorname']?>" */ class="form-control" placeholder="Vornamen"/><br>
				<input type="text" name="nachnamen" /*value="<?=@$_POST['nachnamen']?>" */ class="form-control" placeholder="Nachnamen"/>
				<br>
				<input type="password" name="password" /*value="<?=@$_POST['password']?>" */ class="form-control" placeholder="Passwort"/><br>
				<input type="password" name="passwordcontrol" /*value="<?=@$_POST['passwordcontrol']?>" */ class="form-control" placeholder="Passwort bestätigen"/><br>

			    <button type="submit" value="übermitteln" class="form-control btn btn-default" /> Absenden
			    </button>
			</div>
			<div class="col-md-12">
				<?php 
					if(empty($_POST['vorname']) == TRUE)
					{
						echo "Bitte geben Sie Ihren Vor- und Nachnamen ein!";
					}
					else
					{
					if($_POST['vorname'] != "")
					{
						echo "Der Eingetragene Vorname ist: ". "<em>" . $_POST['vorname'] ."</em><br>";
					}
					if($_POST['nachnamen'] != "")
					{
						echo "Der Eingetragene Nachnamen ist: ". "<em>". $_POST['nachnamen'] . "</em><br>";
					}
				}
				if((@$_POST['password']) == (@$_POST['passwordcontrol']))
				{
					echo "Passwörter stimmen überein!";
				}
				else echo "<strong>" . "Passwörter sind nicht gleich!" . " </strong>";

				?>
					
					
			</div>
		</div>
	</section>
</body>
</html>
