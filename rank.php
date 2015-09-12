<?php
	require_once("include.inc.php");
	
	$result = $database->query("SELECT * FROM questions WHERE id=" . addslashes($_GET["dict"]));
	$row = $result->fetch_array();
	
	echo "<table class=\"table table-striped\">";
	if (!$row["id"])
		echo "<caption>預設題庫 排行榜</caption>";
	else
		echo "<caption>" . $row["name"] . " 排行榜</caption>";
	echo "<tr><th>玩家帳號</th><th>分數</th></tr>";
	
	$result = $database->query("SELECT * FROM rank WHERE dict=" . addslashes($_GET["dict"]) . " ORDER BY score DESC");
	while($row = $result->fetch_array()) {
		echo "<tr><td>" . $row["account"] . "</td><td>" . $row["score"] . "</td></tr>";
	}
	
	echo "</table>";
?>