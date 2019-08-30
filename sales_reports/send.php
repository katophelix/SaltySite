<?php
 echo '<style type="text/css">
 .Stylize {
     font-family: Helvetica Neue,Helvetica,Arial,sans-serif; 
     font-size: 2.5em;
     text-align:center;
 }
 .my-class{
     text-align:center;
 }
 </style>'; 

 $to_email  = "retail@saltydog.com"; //recepient
//  $to_email    = "kat@saltydog.com"; //recepient

// $from_email   = "retail@saltydog.com"; //from email using site domain.

// $subject = "Lucky Receipt Contest Submission";

if($_POST){
	
    //php validation, exit outputting json string
    if(empty($_POST["date"])){ //check for valid numbers in phone number field
        print 'Date is required';
        exit;
    }
 
   
    if(empty($_POST["location"])){
        print 'Location is required!';
        exit;
    }
  
    
    
    $location       = $_POST["location"]; //capture message
    
    $date   = $_POST["date"];
    $NetSales       =$_POST["NetSales"];
    $AMLead       = $_POST["AMLead"]; //capture message
    $PMLead   = $_POST["PMLead"];
    $YourName = $_POST["YourName"]; //capture sender name
    $shift = $_POST["shift"] ; //capture sender email
    $RegisterOne   = $_POST["RegisterOne"] ; //capture sender email
    $RegisterTwo  = $_POST["RegisterTwo"];

    $TotalTransactions  = $_POST["TotalTransactions"];
    $Notes = $_POST["Notes"];


    $from_email         = "retail@saltydog.com"; //from email using site domain.
    $subject = "Retail Sales: ".$location."\n";
   
    $attachments = $_FILES['my_files'];
  
    $file_count = count($attachments['name']); //count total files attached
    $boundary = md5("sanwebe.com"); 
    
    //construct a message body to be sent to recipient
    $message_body =  "Retail Sales Report for " .$location."\n";
    $message_body .=  "------------------------------\n";
    $message_body .=  "Date: ".$date."\n";
    $message_body .=  "Location: ".$location."\n";
    $message_body .=  "Person Completing Form: ".$YourName."\n";
    $message_body .=  "------------------------------\n";

    
    $message_body .=  "Am Lead: ". $AMLead ."\n";
  
    $message_body .=  "Pm Lead: ".$PMLead."\n";
    $message_body .=  "Shift: ".$shift."\n";

    $message_body .=  "------------------------------\n";
    $message_body .=  "Net Sales: ".$NetSales ."\n";

    $message_body .=  "Register One: ".$RegisterOne ."\n";
    $message_body .=  "Register Two: ".$RegisterTwo."\n";

    $message_body .=  "------------------------------\n";

    $message_body .=  "Total Transaction: ".$TotalTransactions."\n";

    $message_body .=  "------------------------------\n";
 
    $message_body .=  "Notes: $Notes\n";
    
    if($file_count > 0){ //if attachment exists
        //header
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "From: ". $from_email .""."\r\n"; 
        // $headers .= "Subject: ".$subject."" . "\r\n";
        
        $headers .= "Reply-To: ".$to_email."" . "\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 
        
        //message text
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
        $body .= chunk_split(base64_encode($message_body)); 

        //attachments
        for ($x = 0; $x < $file_count; $x++){       
            if(!empty($attachments['name'][$x])){
                
                if($attachments['error'][$x]>0) //exit script and output error if we encounter any
                {
                    $mymsg = array( 
                    1=>"The uploaded file exceeds the upload_max_filesize directive in php.ini", 
                    2=>"The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form", 
                    3=>"The uploaded file was only partially uploaded", 
                    4=>"No file was uploaded", 
                    6=>"Missing a temporary folder" ); 
                    print  $mymsg[$attachments['error'][$x]]; 
                    exit;
                }
                
                //get file info
                $file_name = $attachments['name'][$x];
                $file_size = $attachments['size'][$x];
                $file_type = $attachments['type'][$x];
                
                //read file 
                $handle = fopen($attachments['tmp_name'][$x], "r");
                $content = fread($handle, $file_size);
                fclose($handle);
                $encoded_content = chunk_split(base64_encode($content)); //split into smaller chunks (RFC 2045)
                
                $body .= "--$boundary\r\n";
                $body .="Content-Type: $file_type; name=".$file_name."\r\n";
                $body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
                $body .="Content-Transfer-Encoding: base64\r\n";
                $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
                $body .= $encoded_content; 
            }
        }

    }
    else{ //send plain email otherwise
        $headers = "From:".$from_email."\r\n".
         $body = $message_body;
         "Reply-To: ".$to_email. "\n" .
         "X-Mailer: PHP/" . phpversion();
        
         mail($to_email, $subject, $body, $headers);
       
    }
        
    $sentMail = mail($to_email, $subject, $body, $headers);

    if($sentMail){//output success or failure messages
        
        echo "<div style='text-align:center'><h1>Form sent sucessfully!</h1>
       
        </div>";
        exit;
    }
    else{
        print 'Could not send mail! Please check your PHP mail configuration.';  
        exit;
    }
}
