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
	$filePath = SITE_ROOT."public".DS."layout".DS.$template.".php";
	if(file_exists($filePath)) include $filePath;
}

function includePage($page = "") {
	$filePath = SITE_ROOT."public".DS."page".DS.$page.".php";
	if(file_exists($filePath)) include $filePath;
}

function makeClickableLinks($text) {

	return preg_replace('@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@', '<a href="$1" target="_blank">$1</a>', $text);

}




























function buildGallery($picA = '', $picB = '', $picArr = array()) {
	echo '<div class="gallery">';

	echo '<div class="photo-container left">';
	echo '<div style="background-image: url(\''.URL.'public/img/'.$picA.'.jpg\');" class="figure"></div>';
	echo '</div>';
	echo '<div class="photo-container right">';
	echo '<div class="photo-blend">';
	echo '<div style="background-image: url(\''.URL.'public/img/'.$picB.'.jpg\');" class="figure active"></div>';
	if(!empty($picArr)) {
		foreach($picArr as $pic) {
			echo '<div style="background-image: url(\''.URL.'public/img/'.$pic.'.jpg\');" class="figure"></div>';
		}
	}
	echo '</div>';
	echo '</div>';

    echo '</div>';
}