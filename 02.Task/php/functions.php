<?php
function getValue($array, $key, $default = null) {
	return isset($array[$key]) ? $array[$key] : $default;
}

function validateString($value){
	return is_string($value);
}

function validateInput($input){
	$pattern = '/^[a-zA-Z0-9\-_]{4,8}$/';

	return preg_match($pattern, $input);
}

function samePassword($password, $verifyPassword){
	if(!strcmp($password, $verifyPassword)){
		return true;
	} else {
		return false;
	}
}

function getErrorClass($errors, $fieldName, $errorClass = 'error'){
	return empty($errors[$fieldName]) ? '' : $errorClass;
}

function getFieldErrors($errors, $fieldName){
	$html = '';
	foreach(getValue($errors, $fieldName, []) as $err){
		$html .= "<p>$err</p>";
	}

	return $html;
}
?>