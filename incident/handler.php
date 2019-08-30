<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler(); 

$validator = $pp->getValidator();


// $pp->attachFiles(['image']);


//  $pp->sendEmailTo('kat@saltydog.com');


 $pp->sendEmailTo(['bob@saltydog.com','tim@saltydog.com', '8436836473@vzwpix.com','8433846463@vzwpix.com','forms@saltydog.com']); // ← Your email here

echo $pp->process($_POST);