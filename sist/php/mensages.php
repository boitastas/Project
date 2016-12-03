<?php
	if(isset($_GET["mensage"]))
	{
		$mensage = ($_GET["mensage"]);
		echo "<br /><span class='mensage'>$mensage </span> <br />";
	}
?>