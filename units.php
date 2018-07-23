<?php
// number in ponds we want to convert to kilograms
$ponds = 140;
// floating point value for the pond to kilogram conversion
$lb_to_kg = 0.453592;
// use the variables above to calculate ponds multiplied by the kilogram

$kilograms = $ponds * $lb_to_kg;
// display the ponds to kilograms
echo "Weight: ";
echo $ponds;
echo " lb = ";
echo $kilograms;
echo " kg";

// number in miles we want to convert to kilometers
$miles = 2.5;
// floating point value for the mile to kilometer conversion
$mile_to_km = 1.60934;
// use the variables above to calculate miles mulitiplies by the klometer conversion
$kilometers = $miles * $mile_to_km;
// display the miles to kilometers
echo "Distance";
echo $miles;
echo " miles = ";
echo $kilometers;
echo " km";
?>