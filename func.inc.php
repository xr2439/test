<?php
	function IsLoggedIn()
	{
		return (strlen($_SESSION["password"]) && strlen($_SESSION["username"]) &&
		        strlen($_SESSION["nickname"]));
	}
?>