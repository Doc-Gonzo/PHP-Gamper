<html> 
<header>
<title>Testseite</title>
	
</header>
<body>
<?php require 'validator_functions.php';?>
<?php 
$nameSet = false;
$mailSet = false;
$nameOK = false;
$mailOK = false;
?>
	<h1>Guten Tag!</h1>
		
		<?php 
			checkBrowser();
			echo "</br> </br>";
		?>
		<!-- Falls Daten uebergebeben, checke sie --> 
		<?php 
		if (isset($_POST['name'])) {
			echo "Nutzername: " . $_POST['name'];
			echo "</br> </br>";
			$name = $_POST['name'];
			checkName($name);
			$nameOK = true;
			echo "</br> </br>";
			echo "Mailadresse: " . $_POST['email'];
			$email = $_POST['email'];
			echo "</br> </br>";
			checkEmail($email);
			$mailOK = true;
			
		}
		/* Falls Daten leer, gib formular aus */
		else {
			echo '
				<form name="form1" method="post" action="">
					<label for"name">Name: </label>
					<input name="name" type="text"> </br>
					<label for"name">E-Mail: </label>
					<input name="email" type="text"> </br>
					<input  type="submit">
				</form
				';
		}
		if ($mailOK == true && $nameOK == true) {
			echo '
				<form name ="textbox" method="post" action="">
				<label for"content">Inhalt: </label>
					<input name="content" lines="4" type ="textarea">
					<input type="submit">
				</form>
			';
			if (isset($_POST['content'])) {
				$content = $_POST['name'];
				echo "</br> </br>";
				echo 'Ihr Inhalt: ' . $content;
			}
		}
		?>
		

</body>
</html>


