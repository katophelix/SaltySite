<?php
date_default_timezone_set('America/New_York');
ini_set('display_errors',1);
error_reporting(-1);
$images = glob('../slides/merch/*.jpg');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Salty Dog Key West</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Animated Responsive Image Grid - Cycling through a set of images in a responsive grid." />
        <meta name="keywords" content="grid, images, thumbnails, responsive, css3, jquery, javascript, random, transition, 3d, perspective" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link href='https://fonts.googleapis.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.1/foundation.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
		<script type="text/javascript" src="js/modernizr.custom.26633.js"></script>
        
		<noscript>
		<link rel="stylesheet" type="text/css" href="css/fallback.css" />
		</noscript>
		<!--[if lt IE 9]>
			<link rel="stylesheet" type="text/css" href="css/fallback.css" />
		<![endif]-->
        <style>
html,body{
	width:100%;
	height:100%;
}
body{
	background:url(img/bg.jpg) no-repeat center;
	background-size:cover;
	background-attachment:fixed;
}
.container{
	max-width:1366px;
	background:#fff;
	height:100%;
	margin:40px auto;
}
.logo img{
	max-width:200px;
	width:100%;
}
</style>
    </head>
    <body>
		<div class="container">
        
        <div class="row">
        <div class="large-4 columns">
        <div class="logo">
        <img src="img/kw-logo.jpg" alt="Key West Salty Dog Logo" title="Key West Salty Dog Logo">
        </div><!--logo-->
        </div><!--4columns-->
        <div class="large-8 columns">
        </div><!--8columns-->
        </div><!--row-->
        </div><!--container-->
    </body>
</html>