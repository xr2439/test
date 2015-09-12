<div class="input-group">
	<span class="input-group-addon">列數</span><select class="form-control" id="row-set" name="size">
<?php
		for ($i = 5; $i <= 15; $i++)
		{
			if ($i == $_GET["col"])
				echo "<option selected>";
			else
				echo "<option>";
			echo $i . "</option>";
		}
?>
	</select>
</div><br>
<div class="input-group">
	<span class="input-group-addon">行數</span><select class="form-control" id="col-set" name="size">
<?php
		for ($i = 5; $i <= 15; $i++)
		{
			if ($i == $_GET["row"])
				echo "<option selected>";
			else
				echo "<option>";
			echo $i . "</option>";
		}
?>
	</select>
</div>