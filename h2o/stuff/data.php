<?php
ini_set('display_errors',1);
error_reporting(-1);
include_once('../simple_html_dom.php');
$weather = file_get_html('../weather/sbeach/weather2.inc');
$wth = array();
$w = $weather->find('td', 59)->plaintext.'<br><hr>';
$w = explode(' ',$w);
echo 'Gusting at '.$w[0].' mph';
?>