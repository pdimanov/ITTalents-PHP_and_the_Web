<?php
include_once 'php/functions.php';

	$input = getValue($_POST, 'degreesInput');
	$system = getValue($_POST, 'degreesSystem');
	$errors = [];

	function validateInput(&$errors){

		global $input;

		if(!isRequired($input) || !isNumeric($input)){
			$errors['input'][] = 'You must enter a number.';
		}

		return empty($errors);
	}

	function correctForm($errors){

		global $input, $system;

		if(empty($errors)){
			return "<p>The temp is ".convertTemp($input, $system)."</p>";
		}
	}


	if($_POST){
		validateInput($errors);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 3</title>
	<style>
		.error {
			color: red;
			border-color:red;
		}
	</style>
</head>
<body>
	<div id="root">
		<form action="" method="POST">
			<input type="text" name="degreesInput" class="<?= getErrorClass($errors) ?>" value="<?= htmlentities($input); ?>">
			<select name="degreesSystem" id="degreesSystem">
				<option value="FtoC">F to C</option>
				<option value="CtoF">C to F</option>
			</select>
			<input type="submit">
		</form>
		<?= getFieldErrors($errors, 'input') ?>
		<?php if ($_POST) :?>
			<?= correctForm($errors) ?>
		<?php endif; ?>
	</div>	
</body>
</html>