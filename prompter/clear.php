<?php
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
echo "Connected successfully";

$sql = 'DELETE FROM requests';

if (mysqli_query($conn, $sql)) {
    echo "DELETED successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

