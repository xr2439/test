<?php
	require_once("include.inc.php");
?>

<div class="input-group">
	<span class="input-group-addon">用戶名稱</span><select class="form-control" id="user-list" onchange="GetDictList();">
		<option>--- 請選擇 ---</option>
		<?php
			$result = $database->query("SELECT * FROM users");
			while($row = $result->fetch_array()) {
				if ($database->query("SELECT * FROM questions WHERE account ='" . $row["account"] . "'")->num_rows)
					echo "<option>" . $row["name"] . " (" . $row["account"] . ")</option>";
			}
		?>
	</select>
</div><br>
<div class="input-group">
	<span class="input-group-addon">選擇題庫</span><select class="form-control" disabled="true" id="dict-list">
		<option>--- 請先選擇用戶 ---</option>
	</select>
</div>