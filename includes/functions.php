<?php


function stripZerosFromDate( $marked_string="" ) {
	// first remove the marked zeros
	$no_zeros = str_replace("*0", "", $marked_string);
	// then remove any remaining marks
	$cleaned_string = str_replace("*", "", $no_zeros);
	return $cleaned_string;
}

function redirectTo( $location = NULL) {
	if ($location != NULL) {
		header("Location: {$location}");
		exit;
	}
}

function outputMessage($message="") {
	if (!empty($message)) {
		echo "<div class=\"message\"><p>{$message}</p></div>";
	} else {
		echo "";
	}
}

function includeLayoutTemplate($template = "") {
	include SITE_ROOT."public".DS."layout".DS.$template.".php";
}

function makeClickableLinks($text) {

	return preg_replace('@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@', '<a href="$1" target="_blank">$1</a>', $text);

}
