<?php
function getValue($array, $key, $default = null) {
	return empty($array[$key]) || !is_numeric($array[$key]) ? $default : $array[$key];
}
?>