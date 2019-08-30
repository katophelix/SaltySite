<html>
<body>


<?php


date_default_timezone_set('America/New_York');
// $mysqli = new mysqli('localhost', 'salty_dev', 'Mzu!d266', 'saltydog_dev');

$servername = "23.238.115.234";
$username = "saltydog_kat";
$password = "Saltyk9";
$dbname = "saltydog_Song_Requests";




// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$song_title = ($_POST['song']);
$artist = ($_POST['artists']);
$submitter = ($_POST['name']);
$location = ($_POST['location']);
// $IP = $_SERVER['REMOTE_ADDR'];
$created = date("Y-m-d H:i:s");
// $ipFormInput = ($_POST['ipFormInput']);
$link_address = 'https://tv.saltydog.com/';

$sql = 'INSERT INTO requests (song_title, artists, submitter, location, created, ip)
VALUES ("' . $song_title . '", "' . $artist . '", "' . $submitter . '", "' . $location . '", "' . $created . '", "' . $IP . '")';

if (mysqli_query($conn, $sql)) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.location.href='https://www.saltydog.com/request/thank-you.html';
 </SCRIPT>");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
// header("Location: https://www.saltydog.com/request");
// exit();
?>






</body>
</html>