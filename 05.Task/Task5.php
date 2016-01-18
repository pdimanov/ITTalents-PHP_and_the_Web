<?php 
	require_once 'php/functions.php';

	if($_REQUEST){
		if($_POST){
			getInfo($_POST);
		} else if($_GET){
			getInfo($_GET);
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 5</title>
</head>
<body>
	<div id="root">
		<form action="" method="POST">
			<input type="text" name="input">
			<input type="submit">
		</form>
	</div>
</body>
</html>