<?php
	error_reporting(E_ALL ^ E_NOTICE);
	$op = $_GET["op"];
	switch($op)
		{
			case "add":
				$content = "php/add_cont.php";
				$title = "Add Contact";
				break;
			case "delete":
				$content = "php/del_cont.php";
				$title = "Delete Contact";
				break;
			case "edit":
				$content = "php/edit_cont.php";
				$title = "Edit Contact";
				break;
				
			default:
				$content = "php/home.php";
				$title = "Appointment Book";
				break;
		}

?>
<!DOCTYPE html>
<html lang="english">
<head>
<meta charset="utf-8" />
<title><?php echo $title; ?> </title>
<link rel="stylesheet" href="css/style.css" media="all" />
<script src="js/style.js"/> </script>
</head>

<body>
<section id="content">
<nav>
<ul>
	<a class="config" href="index.php"><Li>Home</li></a>
	<a class="config" href="?op=add"><Li>Add Contact</li></a>
	<a class="config" href="?op=delete"><Li>Delete Contact</li></a>
	<a class="config" href="?op=edit"><Li>Edit Contact</li></a>
</ul>
</nav>
<section id="main">
	<?php include($content); ?>

</section>

</section>

</body>
</html>