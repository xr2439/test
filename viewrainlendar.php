<?php
	require_once("include.inc.php");
	$result = $database->query("SELECT * FROM user WHERE username='" . addslashes($_SESSION["username"]) . "'");
	$row = $result->fetch_array();
	$id = $row['id'];
	
	$result = $database->query("SELECT * FROM rainlendar WHERE owner='" . $id . "'");
	while ($row = $result->fetch_array())
	{
		echo <<< END
		<form class="basic-grey">
			<textarea readonly style="resize:none;">時間： $row[date] </textarea>
			<textarea readonly style="resize:none;">事件： $row[event] </textarea>
		</form>
END;
	}

?>