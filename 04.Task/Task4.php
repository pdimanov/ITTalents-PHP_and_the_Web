<?php 
require_once 'php/functions.php';

$input = getValue($_POST, 'input');
$errors = [];

function validateForm(&$errors){

	global $input;

	if(!isRequired($input) || !inputLength($input)){
		$errors[] = 'You must add 10 numbers separated by comma (with no space inbetween).';
	} else if (!validInput($input)){
		$errors[] = 'Numbers only.';
	}
}

function correctForm($input){

	global $input, $errors;

	$result = '';
	if(empty($errors)){
		$result = explode(',', $input);
		sort($result);
		$result = implode(',', $result);
	}

	return "<p>".$result."</p>";
}

if($_POST){
	validateForm($errors);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 4</title>
	<style>
	.error {
		color:red;
	}

	.error input {
		border-color: red;
	}
	</style>
</head>
<body>
	<div id="root">
		<form action="" method="POST">
			<div class="<?= getErrorClass($errors) ?>">
				<input type="text" name="input" value="<?= htmlentities($input); ?>">
				<?= getErrorField($errors) ?>
			</div>
			<input type="submit">
		</form>
		<?= correctForm($input) ?>
	</div>
</body>
</html>