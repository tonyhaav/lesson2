<?php

		//getting the message from address
		$my_message = $_GET["message"];
		$kiri = $_GET["kiri"];
		$best = $_GET["best"];
		
		echo "my message is ".$kiri;
		echo " my name is ".$my_message;
		echo " best ".$best;
?>

<h2> First Application </h2>

<form  method="get">
		<label for="message"><label><br>
		<input type="text" name= "kiri"><br>
		
		<label for="message"><label><br>
		<input type="text" name= "message"><br>
		
		<label for="message"><label><br>
		<input type="text" name= "best"><br>
		
		<br>
	<input type="submit" value="i like ponys">
<form> 