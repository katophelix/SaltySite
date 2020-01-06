<?php
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Salty Dog Key West</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/vendor/modernizr.js"></script>
    
    <SCRIPT LANGUAGE="JavaScript">

<!--


// SETTINGS:
//  - numphotos:   total number of photos in the show
//  - timeBetween: time between photos in msec
//  - loop:        true = will loop indefinitely
//                 false = will only go through the show once

numphotos      = 15;
timeBetween    = 3000;
loop           = true;

if (document.images) {
   nextphoto      = new Image(200,166);
   nextphoto.src  = "photo1.jpg";
}

counter = 1;
stopped = false;
var timeoutID;

function Swapphoto() {
   if ((document.images) && (stopped == false)) {
      document['photoIMG'].src = nextphoto.src;
      counter++;
      if (counter == numphotos) {
         counter = 0;
         if (loop == false) {
            stopped = true;
         }
      }
      nextphoto.src = "photo" + counter + ".jpg";
      timeoutID = setTimeout('Swapphoto()', timeBetween);
   }
}

function StopShow() {
   stopped = true;
   clearTimeout(timeoutID);
}

function StartShow() {
   if (stopped == true) {
      stopped = false;
      Swapphoto();
   }
}

// -->

</SCRIPT>


  </head>
<body onload="timeoutID = setTimeout('Swapphoto()', timeBetween); return true;">
<div class="frawn2"></div>
<div class="row">
<div class="large-5 columns logo">
<img src="img/logo-dk.png" width="171" height="182" alt= "Salty Dog Key West Logo" title="Salty Dog Key West">
</div>
<div class="large-4 columns">
<p style="font-weight:bold;text-transform:uppercase;font-family:arial,sans-serif"">Contact</p><br>
903 Simonton Street, Key West, Florida<br>
<div style="margin-top:10px;">305.294.0036</div>

</div>
<div class="large-3 columns">
<p style="font-weight:bold;text-transform:uppercase;font-family:arial,sans-serif"">Hours</p><br>
Open 7 Days a Week<br>
<div style="margin-top:10px;">10am - 8pm</div>
</div>
</div>
<br><br>
<div align="center">

<!-- <IMG SRC="photo0.jpg" NAME="photoIMG" ALT="Photo Show Image"  border = "0">  -->

</center>


<div class="row" id="img-grid">
<ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-3">
<li><IMG SRC="photo0.jpg" NAME="photoIMG" ALT="Photo Show Image"  border = "0"></li>
<li class="bw"><img src="img/img2.jpg" alt="First Image" title="Tshirt Carousel"></li>
<li><img src="img/img3.jpg" alt="First Image" title="Tshirt Carousel"></li>
<li class="bw"><img src="img/img4.jpg" alt="First Image" title="Tshirt Carousel"></li>
<li><img src="img/img5.jpg" alt="First Image" title="Tshirt Carousel"></li>
<li class="bw"><img src="img/img6.jpg" alt="First Image" title="Tshirt Carousel"></li>
<li><img src="img/img7.jpg" alt="First Image" title="Tshirt Carousel"></li>
<li class="bw"><img src="img/img8.jpg" alt="First Image" title="Tshirt Carousel"></li>
<li><img src="img/img9.jpg" alt="First Image" title="Tshirt Carousel"></li>
</ul>
</div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
</body>
</html>