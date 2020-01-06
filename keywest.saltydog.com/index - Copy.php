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



numphotos      = 73;
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
      nextphoto.src = "photo" + counter + ".jpg" + "?v=" + Math.random();
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
<a href="http://saltydog.com" target="_blank" title="Salty Dog Cafe"><img src="img/logo-dk.png" width="171" height="182" alt= "Salty Dog Key West Logo" title="Salty Dog Key West"></a>
</div>
<div class="large-4 columns">
<!-- <p style="font-weight:bold;text-transform:uppercase;font-family:arial,sans-serif"">Address</p> -->
<br>903 Simonton Street at Olivia<br><br> 
Key West, Florida  33040<br><br>
<div style="margin-top:10px;">305.294.0036</div>
</div>


<div class="large-3 columns">
<!-- <p style="font-weight:bold;text-transform:uppercase;font-family:arial,sans-serif"">Hours</p>  -->
<br>Open Everyday<br><br>
10am - 8pm<br><br>
<div style="margin-top:10px;"><a href="mailto:keywest@saltydog.com?Subject=Key West">Contact Us</a></div>
</div></div>
<br>


<div class="row" id="img-grid">
<ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-3">
<li style="overflow:hidden;max-height:320px;"><IMG SRC="photo0.jpg" NAME="photoIMG" ALT="Photo Show Image"  border = "0" style="position:relative;top:-50%;"></li>
<li class="bw"><img src="new-pics/kw11.jpg" alt="First Image" title="Tshirt Carousel"></li>
<li><img src="new-pics/kw1.jpg" alt="First Image" title="Tshirt Carousel"></li>
<li class="bw"><img src="new-pics/kw3.jpg" alt="First Image" title="Tshirt Carousel"></li>
<li><a href = "https://maps.google.com/maps?q=903+simonton+street+key+west+fl&client=safari&oe=UTF-8&hnear=903+Simonton+St,+Key+West,+Florida+33040&gl=us&t=m&z=15"><img src="img/img5.jpg" alt="First Image" title="Tshirt Carousel"></a></li>
<li class="bw"><img src="new-pics/kw12.jpg" alt="First Image" title="Tshirt Carousel"></li>
<li><img src="new-pics/kw4.jpg" alt="First Image" title="Tshirt Carousel"></li>
<li class="bw"><img src="new-pics/kw9.jpg" alt="First Image" title="Tshirt Carousel"></li>
<!--<li class="bw"><img src="img/img8.jpg" alt="First Image" title="Tshirt Carousel"></li>-->
<li><img src="new-pics/kw5.jpg" alt="First Image" title="Tshirt Carousel"></li>
</ul>
</div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    
    <br><br> 
    <div align="center">
    <a href="mailto:keywest@saltydog.com?Subject=Key West">Contact Us</a>  &nbsp; &nbsp; &nbsp;   <a href="legal.html">Legal</a>
    <br><br><br><br>
    The Salty Dog Retail Store in Key West
        <br><br>
        903 Simonton Street
        <br><br>
        305.294.0036
        <br> <br>
        Phone Orders
        <br><br>
      <a href = "https://maps.google.com/maps?q=903+simonton+street+key+west+fl&client=safari&oe=UTF-8&hnear=903+Simonton+St,+Key+West,+Florida+33040&gl=us&t=m&z=15">Directions</a>
        
        
        
        
        
</div>
</body>
</html>