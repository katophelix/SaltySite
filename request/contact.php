<?php
require_once('add_song2.php');
require_once('config.php');
require('PHPMailer/PHPMailerAutoload.php');

if(isset($_POST) & !empty($_POST)){

	$song_title = ($_POST['song']);
	$artist = ($_POST['artists']);
	$submitter = ($_POST['name']);
	$location = ($_POST['location']);
	
	// $IP = $_SERVER['REMOTE_ADDR'];
	$created = date("Y-m-d H:i:s");
	$ipFormInput = ($_POST['ipFormInput']);
	$link_address = 'https://tv.saltydog.com/';
	$email = 'requests@saltydog.com/';

if(!isset($song_title) || empty($song_title)){
	$error[] = "song_title is required";
}

if(!isset($artist) || empty($artist)){
	$error[] = "artist is required";
}

if(!isset($submitter) || empty($submitter)){
	$error[] = "submitter is required";
}

if(!isset($location) || empty($location)){
	$error[] = "location is required";
}

if(!isset($error) || empty($error)){
	$to = "kat@saltydog.com";
	$headers = "From : " . $email;

	$mail = new PHPMailer();

	$mail->isSMTP();
	$mail->Host = $smtphost;
	$mail->SMTPAuth = true;
	$mail->Username = $smtpuser;
	$mail->Password = $smtppass;
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;

	$mail->setFrom('requests@saltydog.com');
	$mail->addAddress('kat@saltydog.com'); 

	$mail->Subject = 'song request';
	$mail->Body    = " song_title : " . $song_title . " artist: " . $artist . ". submitter : " . $submitter . ". ip address : " . $ipFormInput;

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
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
	/*
	if(mail($to, $subject, $message, $headers)){
		$sql = "INSERT INTO `contact` (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
		if(mysqli_query($connection, $sql)){
			"Message Received, we will get back to you soon";
		}else{
			echo "Failed to send message, Try again";
		}
	}else{
		echo "Failed to send message, Try again";
	}
	*/
}


}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-9994729-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-9994729-1'), { 'optimize_id': 'GTM-N9XR6RG'};
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="android-chrome-144x144.png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SaltyDogRequest</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

     <style>
            .form-group {
                    width: 80%;
                    padding: 1px;
                   
                    box-sizing: border-box;
                    margin-top: 2px;
                    margin-bottom: 2px;
                    resize: vertical;
                }

            

                input[type=submit]:hover {
                    /* background-color: #45a049; */
                }

                .container {
                 
                    background-color: white;
                    padding: 2px;
                    color: black;
                    width: 80%;
text-align: center;
                }


             


                .container .card-img-top {

                    background-color: white !important
                }

               h1 {
font-size: 2em;
                    color: rgb(4, 4, 51) !important;
                }

                
                label {
font-size: 1em;
                    color: rgb(4, 4, 51) !important;
                }
            </style>

  <div class="container justify-content-center ">
  <div class="row justify-content-center" style="margin-top: 10px;">
      <div class="col justify-content-center">
        <h1>Salty Dog Song Request</h1>        
      </div>
    </div>

    <div class="row justify-content-center" style="margin-top: 10px;">
      <div class="col justify-content-center">
        <form action="add_song.php" method="post">
          <div class="form-group">
            <label for="song">Song Title</label>
            <input type="text" class="form-control" id="song" name="song" required maxlength="30">
          </div>
          <div class="form-group">
            <label for="song">Artist</label>
            <input type="text" class="form-control" id="artists" name="artists" required maxlength="25">
          </div>
          <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="song">ip</label>
            <input type="text" class="form-control" id="ipFormInput" name="ipFormInput" >
          </div>
          <div class="form-group">
            <label for="location">I am listening from...</label>
            <select class="form-control" id="location" name="location" required>
              <option value="1">The Cafe Deck</option>
              <option value="2">Live on the Internet</option>
            </select>
          </div>          
<br>
          <input type="submit"  class="btn btn-primary" value="Request Song (Limit 3)">
        </form>
      </div>
    </div>

    <div class="row justify-content-center" style="margin-top: 10px;">
      <div class="col justify-content-center">
        <p>Salty Dog receives numerous requests each night from listeners around the world. We ask that you please limit your requests to 3 per night.</p>

        <p>Please sign on to our free, open wireless network "WiFiDo" (the fastest free internet connection on the island) before you submit your request. Submitting your request while on the "WiFiDo" network ensures that the musician knows you are at the cafe. Thanks and enjoy the tunes!</p>

        <a href="http://cruise.saltydog.com/"><p>Salty Dog Happy Hour Cruise<br>
        Click here to view schedule and book your tickets online.</a></p>

      </div>
    </div>

  </div>
  <script type="application/javascript ">
    const ipFormInput = document.getElementById('ipFormInput');

    fetch('https://api.ipify.org?format=json')
        .then((response) => { return response.json() })
        .then((json) => {
            let ip = json.ip;
            ipFormInput.value = ip;
        })
        .catch((err) => { console.log(`Error getting IP Address: ${err}`) })
</script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>