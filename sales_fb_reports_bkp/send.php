<?php

$date = $_POST['c164'];
$location = $_POST['c25'];
$netsales = $_POST['c33'];
$completedby = $_POST['c38'];
$shift = $_POST['c188'];

$bnet = $_POST['c48'];
$bcov = $_POST['c53'];
$bavg = $_POST['c58'];

$lnet = $_POST['c63'];
$lcov = $_POST['c68'];
$lavg = $_POST['c73'];

$dnet = $_POST['c78'];
$dcov = $_POST['c83'];
$davg = $_POST['c88'];

$cfb = $_POST['c98'];
$ctix = $_POST['c103'];
$cpas = $_POST['c108'];
$ccrew = $_POST['c113'];

$amfllead = $_POST['c123'];
$amkitlead = $_POST['c128'];
$pmfllead = $_POST['c133'];
$pmkitlead = $_POST['c138'];
$notes = $_POST['c250'];

$body = '';

$body .= "Date: " . $date . "\r\n";
$body .= "Location: " . $location . "\r\n";
$body .= "Net Sales: " . $netsales . "\r\n";
$body .= "Completed By: " . $completedby . "\r\n";
$body .= "Shift: " . $shift . "\r\n";

$body .= "Breakfast Net: " . $bnet . "\r\n";
$body .= "Breakfast Covers: " . $bcov . "\r\n";
$body .= "Breakfast Avg: " . $bavg . "\r\n";

$body .= "Lunch Net: " . $lnet . "\r\n";
$body .= "Lunch Covers: " . $lcov . "\r\n";
$body .= "Lunch Avg: " . $lavg . "\r\n";

$body .= "Dinner Net: " . $dnet . "\r\n";
$body .= "Dinner Covers: " . $dcov . "\r\n";
$body .= "Dinner Avg: " . $davg . "\r\n";

$body .= "Cruise F&B: " . $cfb . "\r\n";
$body .= "Cruise Tickets: " . $ctix . "\r\n";
$body .= "Cruise Passengers: " . $cpas . "\r\n";
$body .= "Cruise Crew: " . $ccrew . "\r\n";

$body .= "AM Floor Lead: " . $amfllead . "\r\n";
$body .= "AM Kitchen Lead: " . $amkitlead . "\r\n";
$body .= "PM Floor Lead: " . $pmfllead . "\r\n";
$body .= "PM Kitchen Lead: " . $pmkitlead . "\r\n";
$body .= "Notes: " . $notes . "\r\n";

mail('fnb@saltydog.com', 'Food and Beverage Report: ' . $date, $body);

header("Location:https://www.saltydog.com/sales_fb_reports/thanks.html");

?>
