<?php 
function getInfo($array){
	foreach($array as $key => $value){
		$value = empty($value) ? "empty value" : $value;
		echo "$key with $value with type ".gettype($value);
	}
}
?>