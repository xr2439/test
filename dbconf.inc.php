<?php
	$server = "127.0.0.1";
	$username = "root";
	$password = "";
	$datebase = "ciaoco";
	
	$database = mysqli_connect($server, $username, $password, $datebase);
	$database->set_charset("utf8");
?>