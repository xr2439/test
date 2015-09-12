<?php
	require_once("include.inc.php");
	
	if (!IsLoggedIn()) {
		Header("Location: .");
		exit(0);
	}

	$result = $database->query("SELECT * FROM questions WHERE id=" . addslashes($_GET["dict"]));
	$row = $result->fetch_array();
	
	$result = $database->query("SELECT * FROM rank WHERE account='" . $_SESSION["account"] . "' AND dict=" . addslashes($_GET["dict"]));
	if ($result->num_rows)
		$database->query("UPDATE rank SET score = score + 1 WHERE account='" . $_SESSION["account"] . "' AND dict=" . addslashes($_GET["dict"]));
	else
		$database->query("INSERT INTO rank (`account`, `dict`, `score`) VALUES ('" . $_SESSION["account"] . "', " . addslashes($_GET["dict"]) . ", 1)");
?>