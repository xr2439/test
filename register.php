<?php
	require_once("include.inc.php");
	
	if (IsLoggedIn()) {
		Header("Location: .");
		exit(0);
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (strlen($_POST["username"]) && strlen($_POST["password"]) && strlen($_POST["name"])) {
			$result = $database->query("SELECT * FROM user WHERE username='" . addslashes($_POST["username"]) . "'");
			if ($result->num_rows) {
				echo "USER_EXISTED";
			} else {
				$database->query("INSERT INTO user (`username`, `password`, `nickname`) VALUES ('" . addslashes($_POST["username"]) . "', '" . md5($_POST["password"]) . "', '" . addslashes($_POST["name"]) . "')");
				echo "REG_SUCCESS";
			}
		} else {
			echo "INCOMPLETE_INFO";
		}
		
		exit(0);
	}
?>

<form>
	<div class="input-group"><span class="input-group-addon" >名稱</span><input class="form-control" name="name" type="text">
	</div>
	<div class="input-group"><span class="input-group-addon" >帳號</span><input class="form-control" name="username" type="text">
	</div>
	<div class="input-group"><span class="input-group-addon">密碼</span><input class="form-control" name="password" type="password">
	</div>
</form>