<html> 
<header>
<title>Testseite</title>
	
</header>
<body>
<?php require 'validator_functions.php';?>
<?php 
$nameSet = false;
$mailSet = false;
?>
	<h1>Guten Tag!</h1>
	
		<?php 
			if (isset($_POST['name'])) {
			  checkName($_POST['name']);
			  $nameSet = true;
			}
			else {
				if ($nameSet = !true) {
					echo "Kein Name ubergeben";
				}
					echo '
					<p>Bitte geben Sie Ihren Namen ein</p>
				
					<form name="form1" method="post" action="">
					<label for"name">Name: </label>
					<input name="name" type="text"> </br>
					<input name ="submit_name" type="submit">
					</form
				';
			}
			
			
						if ($nameSet == true && $mailSet == false) {
		
				echo '
					<p>Bitte geben Sie Ihre E-Mail Adresse ein</p>
				
					<form name="form2" method="post" action="">
					<label for"email">Name: </label>
					<input name="email" type="text"> </br>
					<input name ="submit_mail" type="submit">
					</form>
				';
			}
		
		
		
			if ($nameSet == true && $mailSet == false) {
		
				echo '
					<p>Bitte geben Sie Ihre E-Mail Adresse ein</p>
				
					<form name="form2" method="post" action="">
					<label for"email">Name: </label>
					<input name="email" type="text"> </br>
					<input name ="submit_mail" type="submit">
					</form>
				';
			}
			if (isset($_POST['email'])) {
			  checkEmail($_POST['email']);
			  $mailSet == true;
			}
			else {
				echo "Keine Mailadresse ubergeben";
			}
			
		?>
		
		<!-- Validate E-Mail -->
		<?php 			
			if ($nameSet == true && $mailSet == false) {
		
				echo '
					<p>Bitte geben Sie Ihre E-Mail Adresse ein</p>
				
					<form name="form2" method="post" action="">
					<label for"email">Name: </label>
					<input name="email" type="text"> </br>
					<input name ="submit_mail" type="submit">
					</form>
				';
			}
		
			if (isset($_POST['email'])) {
			  checkEmail($_POST['email']);
			  $mailSet == true;
			}
			else {
				echo "Keine Mailadresse ubergeben";
			}
		?>

	

	
</body>
</html>


