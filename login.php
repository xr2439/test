<?php
	require_once("include.inc.php");
	
	if (IsLoggedIn())
	{
		Header("Location: .");
		exit(0);
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (strlen($_POST["username"]) && strlen($_POST["password"]))
		{
			$result = $database->query("SELECT * FROM user WHERE username='" . addslashes($_POST["username"]) . "' AND password='" . md5($_POST["password"]) . "'");
			$row = $result->fetch_array();
			if (!is_null($row))
			{
				$_SESSION = $row;
				
				echo "LOGIN_SUCCESS";
				exit(0);
			}
		}
		
		echo "WRONG_INFO";
		exit(0);
	}
?>

<form>
	<div class="input-group"><span class="input-group-addon" >帳號</span><input class="form-control" name="username" type="text">
	</div>
	<div class="input-group"><span class="input-group-addon">密碼</span><input class="form-control" name="password" type="password">
	</div>
</form>