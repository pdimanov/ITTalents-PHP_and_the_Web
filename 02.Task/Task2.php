<?php
require_once 'php/functions.php';
$username = getValue($_POST, 'username');
$password = getValue($_POST, 'password');
$verifyPassword = getValue($_POST, 'verifyPassword');
$errors = [];

function validateForm(&$errors){

	global $username, $password, $verifyPassword;

	if (!validateInput($username)){
		$errors['username'][] = 'Your username must be between 4 and 8 symbols long. You can use latin characters, digits and - or _';
	};

	if(!validateInput($password) || !validateInput($verifyPassword)){
		$errors['password'][] = 'Your password must be between 4 and 8 symbols long. You can use lating characters, digits and - or _';
	}

	if(!samePassword($password, $verifyPassword)){
		$errors['password'][] = 'You must enter the same password twice.';
	} else {
		$password = password_hash($password, PASSWORD_DEFAULT);
	}
}

function correctForm($errors){

	global $username, $password;

	$html = '';
	if(empty($errors)){
		$html = "<p>Your username is: $username</p> 
				<p>and your hashed password is: $password</p>";
	}

	return $html;
}

if($_POST){
	validateForm($errors);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 2</title>
	<style>
	.error {
		color: red;
	}

	.error input {
		border: 1px solid red;
	}
	</style>
</head>
<body>
	<div id="root">
		<form action="" method="POST">
			<div class="<?= getErrorClass($errors, 'username') ?>">
				<label for="username">Username: </label>
				<input type="text" name="username" id="username" value="<?= htmlentities($username) ?>">
				<?= getFieldErrors($errors, 'username') ?>
			</div>
			<div class="<?= getErrorClass($errors, 'password') ?>">
				<div>
					<label for="password">Password: </label>
					<input type="password" name="password" id="password">
				</div>
				<div>
					<label for="verifying-password">Repeat password: </label>
					<input type="password" name="verifyPassword" id="verifying-password">
				</div>
				<?= getFieldErrors($errors, 'password') ?>
			</div>
			<div>
				<input type="submit">
			</div>
		</form>
		<?php if ($_POST) :?>
			<?= correctForm($errors) ?>
		<?php endif; ?>
	</div>
</body>
</html>