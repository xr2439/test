<?php
	require_once("include.inc.php");
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$result = $database->query("SELECT * FROM user WHERE username='" . addslashes($_SESSION["username"]) . "'");
		$row = $result->fetch_array();
		$id = $row['id'];
		if (strlen($_POST["name"]) && strlen($_POST["content"]))
			$database->query("INSERT INTO `note` (`owner`, `name`, `content`) VALUES ('" . $id. "', '" . $_POST["name"] . "', '" . $_POST["content"] . "')");
		else
			echo "WRONG_INFO";
		exit(0);
	}
?>

<form>
	<div class="input-group"><span class="input-group-addon" >名稱　</span><input class="form-control" name="name" type="text">
	</div>
	<br>
	<div class="input-group"><span class="input-group-addon">內容　</span><textarea name="content" placeholder="請輸入內容..." style="resize:none; width:100%; height:110%;"></textarea>
	</div>
	<br>
</form>