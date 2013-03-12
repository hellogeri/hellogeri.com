<?

// File Settings
$path = "./img/";
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
if( $thehour >= 19 && $thehour <= 21 ) {
	$phase = "dusk";
}	
if( $thehour >= 22 && $thehour <= 24 ) {
	$phase = "night";
}
if( $phase === "day" ) {
	$alt .= "during the " . $phase;
} else {
	$alt .= "at " . $phase;
}

$large = "background-image: url(" . $path . $phase . "-lg" . $ext . ");'";
$small = "background-image: url(" . $path . $phase . "-sm" . $ext . ");'";

?>