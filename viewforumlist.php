<?php
	require_once("include.inc.php");
	$result = $database->query("SELECT * FROM user WHERE username='" . addslashes($_SESSION["username"]) . "'");
	$row = $result->fetch_array();
	$courses_no = explode("#", $row['course_no']);
	$courses_name = explode("#", $row['course_name']);
	for ($i = 0; $i < count($courses_no); $i++)
	{
		echo <<< END
		<div class="basic-grey">
			<textarea readonly style="resize:none;">課程代碼 $courses_no[$i] , 課程名稱 $courses_name[$i] </textarea>
		</div>
END;
	}

?>