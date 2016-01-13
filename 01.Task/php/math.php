<?php
	require_once 'validation.php';

	$firstNum = getValue($_POST, 'firstNum');
	$secondNum = getValue($_POST, 'secondNum');
	$operation = $_POST['operation'][0];
	$result;
	

	if($firstNum == null || $secondNum == null){
		echo 'You must eneter a number only.';
		die;
	}

	switch($operation){
		case '+': 
			$result = $firstNum + $secondNum;
			break;
		case '-':
			$result = $firstNum - $secondNum;
			break;
		case '*':
			$result = $firstNum * $secondNum;
			break;
		case '/':
			$result = $firstNum / $secondNum;
	}
?>

<p>The result is <?= $result ?>.</p>