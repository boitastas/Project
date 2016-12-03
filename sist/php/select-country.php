<?php
	include("connection.php");
	
	$consult = "SELECT * FROM country ORDER BY country";
	$exc_consult = $connection->query($consult);
	
	while($register = $exc_consult->fetch_assoc())
	{
		$country_name = utf8_encode($register["country"]);
		
		echo "<option value='$country_name'>$country_name</option>";
	}
?>