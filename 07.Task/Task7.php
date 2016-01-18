<?php 

	function getServerInfo($array){
		$html = '';
		foreach($array as $key => $value){
			$html .= "<li>$key ======> $value</li>";
		}
		return $html;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 7</title>
</head>
<body>
	<ul>
		<?= getServerInfo($_SERVER); ?>
	</ul>
</body>
</html>