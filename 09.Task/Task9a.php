<?php

	if($_GET){
		$parameter1 = $_GET['parameter1'];
		$parameter2 = $_GET['parameter2'];
		$parameter3 = $_GET['parameter3'];
		$parameter4 = $_GET['parameter4'];
		$parameter5 = $_GET['parameter5'];

		echo "<p>$parameter1</p>";
		echo "<p>$parameter2</p>";
		echo "<p>$parameter3</p>";
		echo "<p>$parameter4</p>";
		echo "<p>$parameter5</p>";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 9a</title>
</head>
<body>
	<div id="root">
		<h1>The result above is from GET</h1>
		<form action="Task9b.php" method="POST">
			<input type="text" placeholder="parameter1" name="parameter1">
			<input type="text" placeholder="parameter2" name="parameter2">
			<input type="text" placeholder="parameter3" name="parameter3">
			<input type="text" placeholder="parameter4" name="parameter4">
			<input type="text" placeholder="parameter5" name="parameter5">
			<input type="submit">
		</form>
	</div>
</body>
</html>