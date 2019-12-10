<!DOCTYPE html>
<html>
<head>
	<title>SaltyDog H2O Weather</title>
	<meta name="generator" content="BBEdit 9.6" />
	
	    <!--<meta name="viewport" content="initial-scale=1">-->
	    
	    
	<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">

   <META HTTP-EQUIV="REFRESH" CONTENT="120;URL=http://www.saltydog.com/h2o">    
    
    
    
    
    <!-- <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    
	<script language="javascript" type="text/javascript">
        jQuery(document).ready(function($) {
	setInterval(function() {
    document.location = "http://www.saltydog.com/h2o/index.php?v="+new Date().getTime()
}, 60000);

		});
    </script>
    <style>
	@media (max-width: 2600px) {
		div.temp{
			width:100% !important;
			border-right:0 !important;
			float:none !important;
			margin:0 !important;
			padding:0 !important;
			font-size:75px !important;
		}
		
	}
	.weather_font{display:none;}
    </style>
</head>

-->


<body bgcolor="#CCFFFF">

<div align="center">


<br>

 <a href="http://saltydog.com/"><img src="http://saltydog.com/weather/sbeach/logo.jpg" border="2" align="middle" /></a> 

<br><br>

<a href="https://www.facebook.com/SaltyDog/"><img src="fb.jpg" alt="facebook" border="2" width="50"  height ="50" align="middle" /></a>



<br>

<div class="content">
<?php
$content = file_get_contents('../weather/sbeach/weather2.inc');
?>
<?php echo $content;?>
</div>

<!-- 
<div align="center">
<div style="width:300px;display:block;margin:0 auto;text-align:center;">

<div style="width:150px;float:left;text-align:center">
<a href="http://saltydog.com" target="_blank"><img src="sd.jpg"  border="1" /></a>
</div>
<div style="width:150px;float:left;text-align:center;">
<a href="http://www.bluewaterhhi.com/HHI_Fishing.html" target="_blank"><img src="bw.jpg"  border="1"/></a>
</div>

</div>

<div style="clear:both;"></div>

-->


<font size="2" color="navy" face="verdana">Live Weather and Tides from Calibogue Sound


<br><br>





<img src="http://64.203.225.208:8122/mjpg/video.mjpg?" alt="cali" align="middle" border="2"/>

<br>

<!--   <a href="http://saltydog.com/boat/netcam.html"><img src="http://64.203.225.208:8113/netcam.jpg" alt="cali" align="middle" width="320" height = "180" border="2"/></a> -->

  <!-- <a href="http://saltydog.com/boat/netcam.html"><img src="http://saltydog.com/h2o/cali.jpg
  " alt="cali" align="middle" width="320" height = "180" border="2"/></a>  -->

<div class="test" style="width:100%;text-align:center;font-size:95px;margin-top:40px;font-family:verdana,sans-serif;letter-spacing:-1px;color:#3b3b3b;font-weight:700;"></div>



<!--
<script>
jQuery(document).ready(function($){
	var test = $('.weather_font tr:eq(2) td:eq(1)').html();
	var test2 = $('.weather_font tr:eq(8) td:eq(1)').html();
	//var test2 = $(test).html();
	$('.test').html('<div style="width:auto;display:inline-block;margin:0 auto;"><div class="temp" style="float:left;margin-right:20px;padding-right:20px;border-right:1px dashed #000;"><span style="font-size:24px;display:block;font-weight:normal;">Temperature</span>' + test + '</div><div class="temp" style="float:left;margin-left:20px;padding-left:20px"><span style="font-size:24px;display:block;margin-top:40px;font-weight:normal">Average Wind</span><span style="font-size:36px;line-height:0px;position:relative;top:-40px;">' + test2 + '</span></div></div>');
});
</script>  -->

<!-- <br><br>
<font size="2" color="#FF0033" face="verdana">5 minute weather updates from Calibogue Sound <br>

</font> -->




<div style="width:100%;text-align:center;margin-bottom:20px;">
<div style="display:inline-block;margin-right:20px;">
<font size="2" color="navy" face="verdana">
<a href="https://www.wunderground.com/MAR/AM/352.html">marine forecast</a>
</font>  
</div>  

<div style="display:inline-block;margin-right:20px;">
<font size="2" color="navy" face="verdana">
<a href="http://www.weatherforyou.com/reports/index.php?forecast=zandh&place=hilton%20head%20island&state=sc&zipcode=29928" target="_blank">local forecast</a>
</font>
</div>


<div style="display:inline-block;margin-right:20px;">
<font size="2" color="navy" face="verdana">
<a href="http://keywest.saltydog.com">saltydog keywest</a>
</font>
</div>

</div>

<script type="text/javascript">

jQuery(document).ready(function($){
var rand = new Date().getTime();
$('#image1').attr('src','http://saltydog.com/weather/sbeach/WindSpeed.gif?' + rand);
$('#image2').attr('src','http://saltydog.com/weather/sbeach/WindDirection.gif?' + rand);
$('#image3').attr('src','http://saltydog.com/weather/sbeach/10MinAvgWindSpeed.gif?' + rand);
$('#image4').attr('src','http://saltydog.com/weather/sbeach/HighWindDirHistory.gif?' + rand);
$('#image5').attr('src','http://saltydog.com/weather/sbeach/HiWindSpeedHistory.gif?' + rand);
$('#image6').attr('src','http://saltydog.com/weather/sbeach/OutsideHumidity.gif?' + rand);
$('#image7').attr('src','http://saltydog.com/weather/sbeach/OutsideTemp.gif?' + rand);
$('#image8').attr('src','http://saltydog.com/weather/sbeach/HeatIndex.gif?' + rand);
$('#image9').attr('src','http://saltydog.com/weather/sbeach/Rain.gif?' + rand);
$('#image10').attr('src','http://saltydog.com/weather/sbeach/MonthlyRain.gif?' + rand);
$('#image11').attr('src','http://saltydog.com/weather/sbeach/Barometer.gif?' + rand);

});
</script>

<?php $date = date("Y-m-d-H-i-s"); ?>

<img id="image1" src="http://saltydog.com/weather/sbeach/WindSpeed.gif?date=<?php echo $date; ?>" alt="" align="middle" />
&nbsp;&nbsp;&nbsp;&nbsp;
<img id="image2" src="http://saltydog.com/weather/sbeach/WindDirection.gif?date=<?php echo $date; ?>" alt="" align="middle" />
&nbsp;&nbsp;&nbsp;&nbsp;
<img id="image3" src="http://saltydog.com/weather/sbeach/10MinAvgWindSpeed.gif?date=<?php echo $date; ?>" alt="" align="middle" /> 


<br><br>
<img id="image4" src="http://saltydog.com/weather/sbeach/HighWindDirHistory.gif?date=<?php echo $date; ?>" alt="" align="middle" />
&nbsp;&nbsp;&nbsp;&nbsp;
<img id="image5" src="http://saltydog.com/weather/sbeach/HiWindSpeedHistory.gif?date=<?php echo $date; ?>" alt="" align="middle" />

<br><br>
<img id="image6" src="http://saltydog.com/weather/sbeach/OutsideHumidity.gif?date=<?php echo $date; ?>" alt="" align="middle" />
&nbsp;&nbsp;
<img id="image7" src="http://saltydog.com/weather/sbeach/OutsideTemp.gif?date=<?php echo $date; ?>" alt="" align="middle" />
&nbsp;&nbsp;
<img id="image8" src="http://saltydog.com/weather/sbeach/HeatIndex.gif?date=<?php echo $date; ?>" alt="" align="middle" />


<br><br>
<img id="image8" src="http://saltydog.com/weather/sbeach/Rain.gif?date=<?php echo $date; ?>" alt="" align="middle" />
&nbsp;&nbsp;
<img id="image10" src="http://saltydog.com/weather/sbeach/MonthlyRain.gif?date=<?php echo $date; ?>" alt="" align="middle" />
&nbsp;&nbsp;
<img id="image11" src="http://saltydog.com/weather/sbeach/Barometer.gif?date=<?php echo $date; ?>" alt="" align="middle" />
<br><br>
&nbsp;&nbsp;
<img id="image12" src="http://saltydog.com/weather/sbeach/Temperature2.gif?date=<?php echo $date; ?>" alt="" align="middle" />
<br><br>



<!-- <img id="image8" src="http://saltydog.com/weather/sbeach/Temperature2.gif?date=<?php echo $date; ?>" alt="" align="middle" />
<br>surface water temp   -->




<br><br>
<img src="http://64.203.225.15:8018/images/tides.jpg?date=<?php echo $date; ?>" alt="tides" align="middle" width="515" height = "540" border="2" /></font>

<br><br>
<font size="2" face="verdana" color="#33AD0F">Green Clock = Tide Falling with Low Tide at Bottom of Clock</font>
<br>
<font size="2" face="verdana" color="#0F14AD">Blue Clock = Tide Rising with High Tide at Top of Clock</font>
<br>
<font size="2" face="verdana" color="red">Red Clock = Negative Low</font>
<br>
<font size="2" face="verdana" >Current Eastern Standard Time in Center of Clock  
<br>Current Tide Height on Face of Clock</font>


<!-- <br><br><br>
<a href="http://64.203.245.206:8086/1/webcam.html"><img src="http://64.203.245.206:8086/1/webcam.jpg" alt="cali" align="middle" width="640" height = "480" border="2"/></a>
<br>Click on Image for Live Calibogue Sound


<br><br><br>

<div align="center">
<div style="width:300px;display:block;margin:0 auto;text-align:center;">

<div style="width:150px;float:left;text-align:center">
<a href="http://saltydog.com" target="_blank"><img src="sd.jpg"  border="1" /></a>
</div>
<div style="width:150px;float:left;text-align:center;">
<a href="http://www.bluewaterhhi.com/HHI_Fishing.html" target="_blank"><img src="bw.jpg"  border="1"/></a>
</div>

</div>

<div style="clear:both;"></div>


-->

<br><br>

<font size="1" color="#FF0033" face="verdana">
* Please make certain that you always reload this page to retrieve the latest weather info.   
<br>Note that each image has a time stamp on it and is updated approximately every 5 minutes. 
<br>This weather / tide data is for general information and there is no guarantee as to its accuracy.  
DO NOT use this data for planning purposes. 
<br>Always refer to NOAA (<a href="http://weather.gov/">http://weather.gov/</a>) for more detailed and accurate weather information. *
</font>






</div>
</body>
</html>



<!-- <br><br>
<img id="image7" src="http://www.saltydog.com/weather/sbeach/InsideTemp.gif" alt="" align="middle" />
&nbsp;&nbsp;&nbsp;&nbsp;

<img id="image7" src="http://saltydog.com/weather/sbeach/InsideHumidity.gif" alt="" align="middle" />

<img id="image8" src="http://saltydog.com/weather/sbeach/Temperature2.gif" alt="" align="middle" />
<br>surface water temp 
<br><br>


<img id="image9" src="http://saltydog.com/weather/sbeach/BarometerHistory.gif" alt="" align="middle" />  -->



<!-- http://98.101.223.10:8213/-wvhttp-01-/GetOneShot -->

