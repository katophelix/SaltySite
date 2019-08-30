<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$manager = $_POST['manager'];
$date = $_POST['date'];
$employee = $_POST['employee'];
$location = $_POST['location'];
$hiredate = $_POST['hiredate'];
$termdate = $_POST['termdate'];
$typeterm = $_POST['typeterm'];
$notice = $_POST['notice'];
$reasonSelf = $_POST['reasonSelf'];
$reasonTerm = $_POST['reasonTerm'];
$rehire= $_POST['rehire'];
$explain = $_POST['explain'];




$email_from = "info@saltydog.com";//<== update the email address
$email_subject = "New  Termination Form ";
$email_body = "You have received a new termination form from  $manager.\n".

"Manager's Name:  $manager.\n".

"Today's date:  $date.\n".

"Employee Name:   $employee. \n".

"Location:  $location. \n".

"Hire Date:  $hiredate. \n".

"Term Date:  $termdate. \n".

"Type of termination?:  $typeterm. \n".  

"How much notice?:  $notice. \n".

"Reason for Self-Termination:  $reasonSelf. \n".

"Reason for Termination?:  $reasonTerm. \n".

"Eligable for Rehire?:  $rehire. \n".

"Please explain:  $explain. \n".
    
$to = " hr@saltydog.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
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