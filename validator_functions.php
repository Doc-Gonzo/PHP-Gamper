	<?php

		function checkName($name) {			
			$nameString = trim($name);
			$pattern = '/[a-zA-Z.-_]/';
			if (preg_match($pattern, $nameString) === 1) {
				echo "Name " .$name . "  entspricht vorgaben";
				return "Name " .$name . "entspricht vorgaben";
			}
			else {
				echo "Name entspricht nicht den vorgaben";
				return "Name entspricht nicht den vorgaben";
			}			
		}
		
		function checkEmail($email) {			
			$emailString = trim($email);
			$pattern = '/[a-z0-9.-_]+@[a-z.]+/';
			if (preg_match($pattern, $emailString) === 1) {
				echo "Mailadresse korrekt";
				return true;
			}
			else {
				echo "Mailadresse falsch";
				return false;
			}			
		}
		
		function checkBrowser() {
			
			$user_agent =  $_SERVER['HTTP_USER_AGENT'];
			
			$regex_firefox = "/Firefox/";
			$regex_chrome = "/Chrome/";
			$regex_edge = "/Edge/";		
			
			
			if((preg_match($regex_firefox, $user_agent))){
				echo "<br/> <br/>" ,"Firefox erkannt";
			}
			if((preg_match($regex_chrome, $user_agent))){
				echo "<br/> <br/>" ,"Chrome erkannt";
			}
			if((preg_match($regex_edge, $user_agent))){
				echo "<br/> <br/>" ,"Edge erkannt";
			}
		}
		
		
	?>