<?php 
	function editInfo($element) {
		$element = trim($element);
		$element = stripslashes($element);
		$element = strip_tags($element);
		$element = htmlspecialchars($element);

		return $element;
	}

	function lengthInfo($element, $min, $max) {
		$result = (mb_strlen($element) < $min || mb_strlen($element) > $max);

		return !$result;
	}
?>