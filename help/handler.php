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
$validator->fields(['Name','Location'])->areRequired()->maxLength(50);

$validator->field('Message')->maxLength(250);


$pp->attachFiles(['image']);

 $pp->sendEmailTo(['help@saltydog.com','8433846463@vzwpix.com','8436836473@vzwpix.com']); // ← Your email here

// $pp->sendEmailTo(['kat@saltydog.com', '8432909379@vzwpix.com', '8432909379@vtext.com', '3237913221@vzwpix.com']);


// $pp->sendEmailTo('kat@saltydog.com');

echo $pp->process($_POST);