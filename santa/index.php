
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
  <div class="container" style="text-align:center">
      
      <div class="row">
          
          <h1>See Santa Live! </h1>
       
     <h1>     <ul  style="list-style-type:none">
              
              <li>
                  
                  Sat. Dec. 7th

              </li>
                         <li>
              
Sat. Dec. 14th

              </li>
                         <li>
                  

Sat. Dec. 21st
              </li>
          </ul></h1>
          <h2> 3pm to 5pm</h2>
      </div>
      
      
      <div class="row">
          
      
             <h2> Or Visit South Beach Inn and See Santa In Person! </h2>
      </div>
<?php

    $images = glob('*.{gif,png,jpg,jpeg}', GLOB_BRACE); //formats to look for

    $num_of_files = 4; //number of images to display

  array_multisort(array_map('filemtime', $images), SORT_NUMERIC, SORT_DESC, $images);

$latestimage = $images[0];
$latestimage1 = $images[1];
$latestimage2 = $images[2];
$latestimage3 = $images[3];


echo "<img src='" . $latestimage.  "' height='auto' width='640'> '<br>'";
echo "<img src='" . $latestimage1.  "' height='auto' width='640'> '<br>' ";
 echo "<img src='" . $latestimage2.  "' height='auto' width='640'> '<br>' ";
  echo "<img src='" . $latestimage3.  "' height='auto' width='640'> '<br>' ";
?>






  </div>

    </body>
</html>






