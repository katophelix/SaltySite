<?php


date_default_timezone_set('America/New_York');
$servername = "23.238.115.234";
$username = "saltydog_kat";
$password = "Saltyk9";
$dbname = "saltydog_Song_Requests";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id = $_POST['songid'];

$sql = 'DELETE FROM requests WHERE id = ' . $id;


if ($mysqli->query($sql) === TRUE) {
    header("Location:https://www.saltydog.com/music_new/prompter");
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();


?>