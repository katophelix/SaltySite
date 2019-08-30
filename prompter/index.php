
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

$sql = "SELECT * FROM requests ORDER BY id DESC LIMIT 5";
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


 <!-- $result = $mysqli->query($sql);

 while($row = $result->fetch_assoc()) {
    $requests[] = $row;
 }

$result->free();
}
 $mysqli->close();

?>  -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Salty Dog Prompter</title>

    <!-- Bootstrap -->
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



.table {
    margin: 0 0 0 0;
    font-family: Arial;
 font-size:2vw;
    width: 100%;
    overflow: hidden;
}
    
  .row {
    margin: 0 0 0 0;
    font-family: Arial;
   
    width: 100%;
    overflow: hidden;
 }
 
   .col {
    margin: 0 0 0 0;
    font-family: Arial;
   
    width: 100%;
    overflow: hidden;
 }
 
 </style>


  <div class="container-fluid text-center" style="width:100%; font-size:33px">
    <div class="row">
      <div class="col">
      
     <br>
       
       
     <h3>  <?php echo  date("m-d-Y") ;  ?>     <h3>
      </div>
    </div>

    <div class="row"style="width:100%">
      <div class="col" style="width:100%">
      <table width="100%" class="table table-striped" >
  <thead>
    <tr>
             <th>Song Title</th>
             <th>Artist</th>
              <th>Requested By</th>
              
             
              <th>Location</th>
              <!-- <th>IPform</th>
              
             
              <th>IP</th> -->
    </tr>
  </thead>
  <tbody>

 <?php foreach($result AS $request): ?>
  <tr>
    <td><?php echo $request['song_title']; ?></td>
    <td><?php echo $request['artists']; ?></td>
    <td><?php echo $request['submitter']; ?></td>
    
   
    <td>
      <?php if(!empty($request['location'])): ?>
        <?php if($request['location'] == 1): ?>
          The Dock
        <?php elseif ($request['location'] == 2): ?>
          Internet Request
        <?php endif; ?>
      <?php endif; ?>
    </td>
    <td><?php echo $request['whenadd']; ?></td>
    <!-- <td><?php echo $ipFormInput['ipFormInput']; ?></td>
    <td><?php echo $IP['IP']; ?></td>
  </tr> -->
<?php endforeach; ?>  

</tbody>
</table>


      </div>
    </div>
<br>

<br>

<a href="https://saltydog.com/prompter/clear.php">Clear All</a>
  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
     var time = new Date().getTime();
     $(document.body).bind("mousemove keypress", function(e) {
         time = new Date().getTime();
     });

     function refresh() {
         if(new Date().getTime() - time >= 15000) 
             window.location.reload(true);
         else 
             setTimeout(refresh, 10000);
     }

     setTimeout(refresh, 10000);
</script>    
  </body>
</html>