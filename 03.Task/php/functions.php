<?php
function getValue($array, $key, $default = null){
	return isset($array[$key]) ? $array[$key] : $default;
}

function isRequired($value){
	return !empty($value);
}

function isNumeric($value){
	return is_numeric($value);
}

function getErrorClass($errors, $errorClass = 'error'){
	return !empty($errors) ? $errorClass : '';
}

function getFieldErrors($errors, $fieldName){
	$html = '';
	foreach(getValue($errors, $fieldName, []) as $error){
		$html .= "<p class=\"error\">$error</p>";
	}

	return $html;
}

function convertTemp($input, $inputSystem){
	if($inputSystem == 'FtoC'){
		return (5/9)*($input - 32);
	} else {
		return $input * (9 / 5) + 32;
	}
}

?>