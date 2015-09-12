<?php
	require_once("include.inc.php");
	$result = $database->query("SELECT * FROM user WHERE username='" . addslashes($_SESSION["username"]) . "'");
	$row = $result->fetch_array();
	$id = $row['id'];
	
	$result = $database->query("SELECT * FROM note WHERE owner='" . $id . "'");
	while ($row = $result->fetch_array())
	{
		echo <<< END
		<form class="basic-grey">
			<textarea readonly style="resize:none;">記事： $row[name] </textarea>
			<textarea readonly style="resize:none;">內容： $row[content] </textarea>
		</form>
END;
	}

?>