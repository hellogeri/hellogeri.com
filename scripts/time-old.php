// File Settings
$path = "../img/";
$ext = ".jpg";
	
// Attributes
$media = "(min-width: 20em)";
$alt = "Illustration of St. John's, Newfoundland";

// Time Zone
date_default_timezone_set('America/St_Johns');
	
$thehour = date('G');

if( $thehour >= 0 && $thehour <= 5 ) {
	$phase = "night";
}
if( $thehour >= 6 && $thehour <= 9 ) {
	$phase = "dawn";
}
if( $thehour >= 10 && $thehour <= 18 ) {
	$phase = "day";
}
if( $thehour >= 19 && $thehour <= 24 ) {
	$phase = "dusk";
}

if( $phase === "day" ) {
	$alt .= "during the " . $phase;
} else {
	$alt .= "at " . $phase;
}

$large = "<div data-source data-src='" . $path . $phase . "-lg" . $ext . "' media='" . $media . "'>";
$small = "<div data-source data-src='" . $path . $phase . "-sm" . $ext . "'>";
$fallback = "<noscript><img src='" . $path . $phase . "-sm" . $ext . "' alt='" . $alt . "'></noscript>";