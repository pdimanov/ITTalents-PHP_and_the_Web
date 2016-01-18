<?php
	function getValue($array, $key, $default = null){
		return isset($array[$key]) ? $array[$key] : $default;
	}

	function requiredInput($input){
		return !empty($input);
	}

	function validInput($input){
		$pattern = '/[a-zA-Z]/';
		return preg_match($pattern, $input);
	}

	function getErrorClass($error, $fieldName, $errorClass = 'error'){
		return empty($error[$fieldName]) ? '' : $errorClass;
	}

	function getFieldErrors($error, $fieldName){
		$html = '';
		foreach(getValue($error, $fieldName, []) as $error){
			$html .= "<p>$error<p>";
		}
		return $html;
	}
?>