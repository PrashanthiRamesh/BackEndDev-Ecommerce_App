<?php

// echo time();

$timezone_identifiers = DateTimeZone::listIdentifiers();

// foreach($timezone_identifiers as $timezone_identifier){
//     echo $timezone_identifier. "<br>";
// }
echo "The time in " . date_default_timezone_get() . " is " . date("H:i:s").'<br>';

date_default_timezone_set("America/Toronto");

echo "The time in " . date_default_timezone_get() . " is " . date("H:i:s");
