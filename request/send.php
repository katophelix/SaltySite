<?php

require_once 'connect.php';

// echo '<style type="text/css">
//  .Stylize {
//      font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
//      font-size: 2.5em;
//      text-align:center;
//  }
//  .my-class{
//      text-align:center;
//  }
//  </style>';

//  $to_email  = "retail@saltydog.com"; //recepient
$to_email = "requests@saltydog.com"; //recepient

// $from_email   = "retail@saltydog.com"; //from email using site domain.

// $subject = "Lucky Receipt Contest Submission";

if ($_POST) {

    $song_title = ($_POST['song']);
    $artist = ($_POST['artists']);
    $submitter = ($_POST['name']);
    $location = ($_POST['location']);
    // $IP = $_SERVER['REMOTE_ADDR'];
    $created = date("Y-m-d H:i:s");
    $ipFormInput = ($_POST['ipFormInput']);
    $link_address = 'https://tv.saltydog.com/';

    $from_email = "requests@saltydog.com"; //from email using site domain.
    $subject = 'request';

    //construct a message body to be sent to recipient
    $message_body = "Song title:    " . $song_title . "\n";

    $message_body .= "Artist(s):      " . $artist . "\n";
    $message_body .= "Location 1 = The Cafe Dock, Location 2 = Live on the Internet:      " . $location . "\n";
    $message_body .= "Person submitting song:      " . $submitter . "\n";
    $message_body .= "ip address:      " . $ipFormInput . "\n";

    $headers = "From:" . $from_email . "\r\n" .
    $body = $message_body;
    "Reply-To: " . $to_email . "\n" .
    "X-Mailer: PHP/" . phpversion();

}

$sentMail = mail($to_email, $subject, $body, $headers);

if ($sentMail) { //output success or failure messages

    // echo "<div style='text-align:center'><h1>Form sent sucessfully!</h1>

    //     </div>";
    $sql = 'INSERT INTO requests (song_title, artists, submitter, location, created, IP)
VALUES ("' . $song_title . '", "' . $artist . '", "' . $submitter . '", "' . $location . '", "' . $created . '", "' . $IP . '")';

    if (mysqli_query($conn, $sql)) {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.location.href='https://www.saltydog.com/request/thank-you.html';
 </SCRIPT>");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    exit;
} else {
    print 'Could not send mail! Please check your PHP mail configuration.';
    exit;
}
