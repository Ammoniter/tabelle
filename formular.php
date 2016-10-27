<html>
<head>
	<title>Formular</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<section class="container">
		<div class="row">
			<h1>mein Formular</h1>
			<div class="col-md-12">

				<form action="formular.php" method="post">
				<input type="text" name="vorname" value="<?=$_POST['vorname']?>" class="form-control"/><br>
				<input type="text" name="nachnamen" value="<?=$_POST['nachnamen']?>" class="form-control"/><br>
				<input type="password" name="Passwort 1" value="<?=$_POST['Passwort1']?>" class="form-control"/><br>

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
						echo "eingetragener Vorname: ". $_POST['vorname'] ."<br>";
					}
					if($_POST['nachnamen'] != "")
					{
						echo " eingetragener Nachnamen: ". $_POST['nachnamen'];
					}
				}
				if(empty($_POST['Passwort1']) == TRUE)
					{
						echo "Bitte geben Sie Ihren Vor- und Nachnamen ein!";
					}
				?>
					
					
			</div>
		</div>
	</section>
</body>
</html>
