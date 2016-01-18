<?php
session_start();
	
	if(!isset($_SESSION['count'])){
		$_SESSION['count'] = 0;
	} else {
		$_SESSION['count']++;
	}

	echo $_SESSION['count'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 8</title>
</head>
<body>

</body>
</html>