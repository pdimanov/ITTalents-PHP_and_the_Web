<?php 
	function getValue($array, $key, $default = null){
		return isset($array[$key]) ? $array[$key] : $default;
	}

	function isRequired($input){
		return !empty($input);
	}

	function inputLength($input){
		$input = explode(',', $input);
		return (count($input) == 10);
	}

	function validInput($input){
		$input = explode(',', $input);
		foreach($input as $value){
			if(!is_numeric($value)){
				return false;
			}
		}
		return true;
	}

	function getErrorClass($errors, $errorClass = 'error'){
		return !empty($errors) ? $errorClass : '';
	}

	function getErrorField($errors){
		$html = '';
		if(isset($errors[0])){
			$html .= "<p>".$errors[0]."</p>";
		}

		return $html;
	}
?>