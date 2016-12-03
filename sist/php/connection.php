<?php
	function connect()
	{
		$server = "localhost";
		$user = "boitastas";
		$pass = "qazwsx12";
		$db = "contacts";
		
		$con = new mysqli($server, $user, $pass, $db);
		return $con;
	}
	$connection = connect();
?>