<?php
require_once 'php/functions.php';

$firstname = getValue($_POST, 'firstname');
$lastname = getValue($_POST, 'lastname');
$date = getValue($_POST, 'date');
$errors = [];

function validateForm(&$errors){
	global $firstname, $lastname, $date;

	if (!requiredInput($firstname)){
		$errors['firstname'][] = 'You must enter your firstname.';
	} else if (!validInput($firstname)){
		$errors['firstname'][] = 'Your firstname must consist of only latin letters.';
	}

	if (!requiredInput($lastname)){
		$errors['lastname'][] = 'You must enter your lastname.';
	} else if (!validInput($lastname)){
		$errors['lastname'][] = 'Your lastname must consist of only latin letters.';
	}

	if(empty($date)){
		$errors['date'][] = 'You must enter your birth date.';
	}
}

if($_POST){
	validateForm($errors);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 6</title>
	<style>
		.error {
			color: red;
		}

		.error input {
			border-color: red;
		}
	</style>
</head>
<body>
	<div id="root">
		<form action="" method="POST">
			<div class="<?= getErrorClass($errors, 'firstname'); ?>">
				<label for="firstname">Firstname: </label>
				<input type="text" id="firstname" name="firstname" value="<?= htmlentities($firstname); ?>">
				<?= getFieldErrors($errors, 'firstname') ?>
			</div>
			<div class="<?= getErrorClass($errors, 'lastname'); ?>">
				<label for="lastname">Lastname: </label>
				<input type="text" id="lastname" name="lastname" value="<?= htmlentities($lastname); ?>">
				<?= getFieldErrors($errors, 'lastname'); ?>
			</div>
			<div class="<?= getErrorClass($errors, 'date'); ?>">
				<label for="birthdate">Birthdate: </label>
				<input type="date" id="birthdate" name="date" value="<?= htmlentities($date); ?>">
				<?= getFieldErrors($errors, 'date'); ?>
			</div>
			<div>
				<input type="submit">
			</div>
		</form>
	</div>
</body>
</html>