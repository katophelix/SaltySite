
<?php
$servername = "23.238.115.234";
$username = "saltydog_kat";
$password = "Saltyk9";
$dbname = "saltydog_staging";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM lucky ORDER BY id DESC ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $requests[] = $row;
    }
} else {
    echo "0 results";
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
  
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
    <title>SaltyDogWinners</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     <!--   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> -->
     <!--   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>  -->
 
  
  <!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
        crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">   -->
    <!-- <![endif] -->
    <!--  <link rel="icon" type="image/png" href="../images/social-logos/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Quicksand" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="../headers/styleBoot.css">
    <link type="text/css" rel="stylesheet" href="../headers/mega-header.css">  -->

</head>
  <body>

<!--

  <div class="container justify-content-center">
      <div class="my-container text-center">
      <br>
  <div id="back-button">

<a class="btn btn-secondary " href="https://saltydog.com/lucky/" role="button" style="border:1" aria-haspopup="true" aria-expanded="false">  
</a> -->

   
  <div align ="center" 
   
   
   <font face = verdana size ="3">
<br>

<a href="https://saltydog.com/lucky/">Back to Lucky Receipts</font>  </a>

<br>


<font face = verdana size =+2 color="red"><b>Previous Winners</b></font>



<br>

<!--<embed src="https://saltydog.com/lucky/lucky_winners.jpg" type="application/pdf" width="100%" height="1650px" />  -->

<!--<iframe src="https://saltydog.com/lucky/lucky_winners.jpg"  height="1650" width="100%" ></iframe> -->

<img src="lucky.png" border="2" />

<!--<object data="https://saltydog.com/lucky/lucky_winners.pdf" type="application/pdf" style="height:1650px">-->
<!--    <iframe src="https://docs.google.com/viewer?url=https://saltydog.com/lucky/lucky_winners.pdf&embedded=true" style="height:1650px"></iframe>-->
<!--</object>-->

<br><img src="lucky2.png" border="2" />

<br><img src="lucky3.png" border="2" />

<br><img src="lucky4.png" border="2" />

<br><img src="lucky5.png" border="2" />

<br><img src="lucky6.png" border="2" />

<br><img src="lucky7.png" border="2" /> 


</div>




    
  </body>
</html>