<?php 
function display_errors($errors) {
	$display = '<ul class="bg-danger">' ;
	foreach ($errors as $error) {
		$display .= '<li class="text-danger">'.$error.'<!li>' ;
	}
	$display .= '</ul>';
	return $display ;
}

function security($dirty_code) {
	return htmlentities($dirty_code,ENT_QUOTES,"UTF-8");
}

 ?>