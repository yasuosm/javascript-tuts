<?php

function db($obj, $title = '') {
	echo $title;
	echo '<pre>';
	print_r($obj);
	echo '</pre>';
}

db($_POST, '$_POST');
db($_FILES, '$_FILES');

?>