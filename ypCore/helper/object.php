<?php 
function objectToArray($object) {
	if (is_object($object)) {
		$object = get_object_vars($object);
	}

	if (is_array($object)) {
	return array_map(__function__, $object);
	}

	return $object;
}