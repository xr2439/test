<?php
	require_once("include.inc.php");
	
	$sql_result = $database->query("SELECT * FROM questions WHERE account='" . addslashes($_GET["account"]) . "'");
	while($row = $sql_result->fetch_array()) {
		$result[] = $row;
	}
	
	echo json_encode($result);
?>