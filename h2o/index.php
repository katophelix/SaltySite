<!DOCTYPE html>
<html>
<head>
	<title>Salty Dog H2O</title>
	<meta name="generator" content="BBEdit 9.6" />
	
    <link rel="icon" type="image/png" sizes="16x16" href="/android-chrome-144x144.png">
  


<meta http-equiv="refresh" content="360; url=http://saltydog.com/h2o" />
   
</head>
<body bgcolor="#CCFFFF">
<style>
.grid-container {
  display: grid;
  grid-row-gap: 5px;
  grid-template-columns: auto auto auto auto auto;
	margin-bottom: 20px;
 margin-top: 20px;
	width: 80%;
	margin-left: 170px;
}
.grid-item {
 
  padding: 5px;
 
  text-align: center;
}
	
	.button {
  font: bold 21px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}
	
	

</style>



<div align="center">

<table  cellspacing="20"><tr>

<td >
<form>
<input class="click" type="button" value="2 DAY DATA" onclick="window.location.href='http://saltydog.com/weather/sbeach/downld02.txt' " />
</form>
</td>
<td >
<form>
<input class="click" type="button" value="7 DAY DATA" onclick="window.location.href='http://saltydog.com/weather/sbeach/downld08.txt' " />
</form>
</td>
<td >
<form>
<input class="click" type="button" value="SALTY DOG" onclick="window.location.href='https://saltydog.com/' " />
</form>
</td>
<td >
<form>
<input class="click" type="button" value="TIDE CHART" onclick="window.location.href='https://saltydog.com/tidechart/' " />
</form>
</td>
</tr><table>
</div>


<div align="center">


<a href="http://98.101.223.10:8207/axis-cgi/mjpg/video.cgi">


<script language="javascript">
var refreshrate=3;             
var image="http://98.101.223.10:8207/axis-cgi/jpg/image.cgi?";     
var imgheight=720;                   
var imgwidth=1280;                
function refresh(){
document.images["pic"].src=image+"?"+new Date();
setTimeout('refresh()', refreshrate*1000);}
document.write('<IMG SRC="'+image+'" ALT="Please Stand By For Webcam Photo Upload" NAME="pic" ID="pic" WIDTH="'+imgwidth+'" HEIGHT="'+imgheight+'" STYLE="border: 3px solid Black;">');
if(document.images)window.onload=refresh;
</script>  
</a>







<br><br>
	<div align="center" style="font: bold 21px Arial;
  margin-bottom: 15px;">
Live Webcam From South Beach Marina in Sea Pines 
Hilton Head Island
</div>


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
&nbsp;&nbsp;&nbsp;&nbsp;
 <img id="image7" src="http://saltydog.com/weather/sbeach/OutsideTemp.gif?date=<?php echo $date; ?>" alt="" align="middle" />
&nbsp;&nbsp;&nbsp;&nbsp;
<img id="image11" src="http://saltydog.com/weather/sbeach/Barometer.gif?date=<?php echo $date; ?>" alt="" align="middle" />


<br><br> 

<!-- &nbsp;&nbsp;
<img id="image8" src="http://saltydog.com/weather/sbeach/HeatIndex.gif?date=<?php echo $date; ?>" alt="" align="middle" />  -->

<img id="image9" src="http://saltydog.com/weather/sbeach/Rain.gif?date=<?php echo $date; ?>" alt="" align="middle" />
&nbsp;&nbsp;&nbsp;&nbsp;
<img id="image10" src="http://saltydog.com/weather/sbeach/MonthlyRain.gif?date=<?php echo $date; ?>" alt="" align="middle" />
&nbsp;&nbsp;&nbsp;&nbsp;
<img id="image11" src="http://saltydog.com/weather/sbeach/YearlyRain.gif?date=<?php echo $date; ?>" alt="" align="middle" />
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;
<img id="image12" src="http://saltydog.com/weather/sbeach/Temperature2.gif?date=<?php echo $date; ?>" alt="" align="middle" />
<br>
<font size="1" color="navy" face="verdana">suface water temp</font>

<br><br>


<img src="http://64.203.225.15:8018/images/tides.jpg?date=<?php echo $date; ?>" alt="tides" align="middle" width="515" height = "540" border="2" />

<br><br>
<font size="2" face="verdana" color="#33AD0F">Green Clock = Tide Falling with Low Tide at Bottom of Clock</font>
<br>
<font size="2" face="verdana" color="#0F14AD">Blue Clock = Tide Rising with High Tide at Top of Clock</font>
<br>
<font size="2" face="verdana" color="red">Red Clock = Negative Low</font>
<br>
<font size="2" face="verdana" >Current Eastern Standard Time in Center of Clock  
<br>Current Tide Height on Face of Clock</font>



</div>
</body>
</html>











