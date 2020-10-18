<?php include 'database.php'; ?>
<?php
	$query = "DELETE FROM `questions`";
	$delete = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$query = "DELETE FROM `choices`";
	$remove = $mysqli->query($query) or die($mysqli->error.__LINE__);
?>
<meta http-equiv="refresh" content="0;url=index.php">