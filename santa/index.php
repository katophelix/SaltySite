
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-9994729-1"></script>

<script>

window.dataLayer = window.dataLayer || [];

function gtag(){dataLayer.push(arguments);}

gtag('js', new Date());



gtag('config', 'UA-9994729-1'), { 'optimize_id': 'GTM-N9XR6RG'};

</script>





<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="16x16" href="/android-chrome-144x144.png">
<!-- <link rel="icon" type="image/png" sizes="16x16" href="/favicon-192x192.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-256x256.png"> -->
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">

<title>SaltyDogSanta </title>

<!-- Modernizr -->



<!-- jQuery-->

  <script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"

    crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"

    crossorigin="anonymous"></script>

<!-- framework css -->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"

    crossorigin="anonymous">



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"

    crossorigin="anonymous">

<!--<![endif]-->



<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Quicksand" rel="stylesheet"> 

<link href="https://fonts.googleapis.com/css?family=Lily+Script+One" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="https://saltydog.com/headers/styleBoot.css">

<link type="text/css" rel="stylesheet" href="https://saltydog.com/headers/mega-header.css">




    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <?php include 'load.php' ; ?> 



<body>







 <header>
                <?php include '../headers/_HeaderPartial.html' ; ?>
           </header>
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






