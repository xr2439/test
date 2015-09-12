<?php
	require_once("include.inc.php");
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$result = $database->query("SELECT * FROM user WHERE username='" . addslashes($_SESSION["username"]) . "'");
		$row = $result->fetch_array();
		$id = $row['id'];
		if (strlen($_POST["date"]) && strlen($_POST["event"]))
			$database->query("INSERT INTO `rainlendar` (`owner`, `date`, `event`) VALUES ('" . $id. "', '" . $_POST["date"] . "', '" . $_POST["event"] . "')");
		else
			echo "WRONG_INFO";
		exit(0);
	}
?>

<form>
	<div class="input-group"><span class="input-group-addon" >日期　</span><input class="form-control" name="date" type="date">
	</div>
	<div class="input-group"><span class="input-group-addon">新事件　</span><input class="form-control" name="event" type="text">
	</div>
</form>