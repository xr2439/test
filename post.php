<?php
	require_once("include.inc.php");
	$database->query("INSERT INTO `note` (`owner`, `name`, `content`) VALUES ('" . "1" . "', '" . "1" . "', '" . $_POST['name'] . "')");
?>