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
<?php
$images = glob("slides/*.jpg");
?>
<style>
body {font-family:Arial, Helvetica, sans-serif; font-size:12px;}
 
.fadein { 
position:relative; height:332px; width:500px; margin:0 auto;
padding: 10px;
 }
.fadein img {left:10px; top:10px; }
</style>
</head>
<body onload="timeoutID = setTimeout('Swapphoto()', timeBetween); return true;" >
<div class="frawn2"></div>
<div class="row">

<div class="large-3 columns logo">
<a href="http://saltydog.com" target="_blank" title="Salty Dog Cafe" style="width:171px;margin:0 auto 10px;display:block;"><img src="img/logo-dk.png" width="171" height="182" alt= "Salty Dog Key West Logo" title="Salty Dog Key West"></a>
</div>

<div class="large-6 columns" style="text-align:center;">
<!--<img src="img/trolley2.jpg" style="padding:3px;border:1px solid #ccc;">-->
<img src="bus/bus3.jpg" style="padding:3px;border:1px solid #ccc;">
</div>

<style>
@media( max-width: 700px ){
	body{padding-top:20px !important;}
	.large-3{text-align:center;}
	.large-6 img{margin:20px 0;}
	li:nth-child(9){display:none;}
	hr{max-width:70%;margin:20px auto;}
		
}
</style>
<div class="large-3 columns" style="line-height:18px;">
903 Simonton Street at Olivia<br>
Key West, Florida  33040
<hr>
Open Everyday 10am - 8pm<br>

<div style="margin-top:10px;">305.294.0036</div>
<div style="margin-top:10px;"><a href="mailto:keywest@saltydog.com?Subject=Key West">Contact Us &rarr;</a></div>
</div>




</div>
<br>


<div class="row" id="img-grid">
<ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-3">
<li class="fadein" style="overflow:hidden;max-height:320px;">
<?php
foreach($images as $img){
echo '<img src="'.$img.'">';
}
?>
</li>
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
    <script>
$(function(){
	$('.fadein img:gt(0)').hide();
	setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
});
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