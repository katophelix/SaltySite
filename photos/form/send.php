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

//  $recipient_email   = "kat@saltydog.com"; //recepient
  $to_email    = "kat@saltydog.com"; //recepient

 //from email using site domain.

// $subject = "Lucky Receipt Contest Submission";

if($_POST){
	
 
  
    
    
    $name       = $_POST["name"]; //capture message
    
    $email   = $_POST["email"];
    $petname       =$_POST["petname"];
    $location       = $_POST["location"]; //capture message
    $message   = $_POST["message"];
    $bumper = $_POST["bumper"]; //capture sender name
    $name2 = $_POST["name2"] ; //capture sender email
    $street   = $_POST["street"] ; //capture sender email
    $city  = $_POST["city"];

    $state  = $_POST["state"];
    $zip = $_POST["zip"];
    $country = $_POST["country"];


    $from_email         =  $email ; //from email using site domain.
    $subject = "Photo Upload";
   
    $attachments = $_FILES['my_files'];
  
    $file_count = count($attachments['name']); //count total files attached
    $boundary = md5("sanwebe.com"); 
    
    //construct a message body to be sent to recipient
    $message_body =  "Photo Upload\n";
    $message_body .=  "Name: ".$name."\n";
    $message_body .=  "email: ".$email."\n";
    $message_body .=  "petname: ".$petname."\n";
    $message_body .=  "Location: ".$location."\n";
    $message_body .=  "message: ".$message."\n";
    $message_body .=  "bumper: ".$bumper."\n";
    
    $message_body .=  "name2: ". $name2 ."\n";
  
    $message_body .=  "street: ".$street."\n";
    $message_body .=  "city: ".$city."\n";

   
    $message_body .=  "state: ".$state ."\n";

    $message_body .=  "zip: ".$zip ."\n";
    $message_body .=  "country: ".$country."\n";

 
    
    if($file_count > 0){ //if attachment exists
        //header
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
        
        echo "<div style='text-align:center'><h1>Thank you for sharing your photos with us!!!</h1>
       
        </div>";
        exit;
    }
    else{
        print 'Sorry there was an error sending your form. Please email us your photo instead photos@saltydog.com.';  
        exit;
    }
}
