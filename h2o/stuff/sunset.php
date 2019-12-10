<?php
ini_set('display_errors',1);
error_reporting(-1);
if(isset($_POST['email'])){
	$email = $_POST['email'];
    $msg = "Yes. I would like to receive a daily sunset photo.\nMy email is ".$email;
    $msg = wordwrap($msg,70);
	$headers = "From: ".$email . "\r\n" .
               "CC: bob@saltydog.com";
    mail("sundown@caliboguecam.com","Sunset Photo Request",$msg,$headers);
}