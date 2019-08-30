<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$manager = $_POST['manager'];
$name = $_POST['name'];
$noticeType = $_POST['noticeType'];

$date = $_POST['date'];

$title = $_POST['title'];

$wage = $_POST['wage'];
$hours = $_POST['hours'];




$email_from = "info@saltydog.com";//<== update the email address
$email_subject = "New  Employee Notice Form ";
$email_body = "New Employee Notice form regarding : $name.\n".
"Approving Manager:  $manager.\n".
"The notice type:  $noticeType.\n".
"Effective Date:  $date.\n".
"Job Title:  $title.\n".
"Normal Hours:  $hours.\n".
"Hourly Wage:  $wage.\n".
    
    
$to = " hr@saltydog.com";//<== update the email address
$headers = "From: $email_from \r\n";

//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 