<?php
  //set headers to NOT cache a page
  header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
  header("Pragma: no-cache"); //HTTP 1.0
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

 

?>
<!DOCTYPE html>



<html class="no-js">

<!--<![endif]-->



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

    <title>SaltyDogSpecials </title>

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






   <style>

    h5{

       font-size: .8em;

        font-weight:bolder;

    }
    
      h2{

       font-size: .8em;

        font-weight:bolder;

    }

    h1{

        font-size: 1.5em;

    }
      h3{

        font-size: 1.5em;

    }

h4{

font-family: 'Lily Script One', cursive;

font-size: 1.5em;

}

    p{

        font-size: .7em;

    }

    .btn-secondary:hover
  {
  color:black;
  background-color: #d3eaf1;

 
} 
img {
  width: 100%;
}
    </style>



</head>



<?php include 'load.php' ; ?> 



<body>







 <header>
                <?php include '../headers/_HeaderPartial.html' ; ?>
           </header>

         <br>  

            <!-- <img src="https://saltydog.com/images/NEW HEADERS/DAILYSPECIALS.jpg" style="width:100%; height:auto;margin-top: 50px" alt="Banner of Overhead drone shot of salty dog cafe in south beach, with salty dog logo and events written on it."> -->

         
















    <br>

    <div class="container">

        <div class="container" style="width:90%; margin-left: 6%">

            <div class="row">

                   <div class="col">

<a href="https://www.saltydog.com/chefs"><button type="button" class="btn btn-secondary btn-block" >
       <h3>MEET OUR CHEFS!</h3>  </button></a>


</div>

      
</div>


 <br>

   

                    <div class="block1" style="background-color: white !important;">

                    <h1> The Salty Dog Cafe</h1>
                    <h2 class="card-title"><?php echo $data['cafe']['meal']; ?>  <?php echo  date("m-d-Y") ;  ?>  </h2>


                       <h2 class="card-title"> <?php echo $data['cafe']['chef'];  ?> </h2>


                      <br><h4>Daily Specials</h4>

                      <h5 class="card-title"> <?php echo $data['cafe']['special_name'];  ?> </h5>

                      <p class="card-text">  <?php echo $data['cafe']['special_descr'];  ?> </p>

                     <br>

                     

                     <h4> <?php echo $data['cafe']['header'];  ?> </h4>

                      

                      <h5 class="card-title"> <?php echo $data['cafe']['child_name'];  ?> </h5>

                      <p class="card-text">   <?php echo $data['cafe']['child_descr'];  ?> </p>
                    

                      <?php
// outputs e.g.  somefile.txt was last modified: December 29 2002 22:16:23.

        $filename = 'uploads/uploads/cafe.png';
        if (file_exists($filename)) {
            $filename = "uploads/uploads/cafe.png";
            $filemtime = filemtime($filename);
}
?>
                   
                   <img src="uploads/uploads/cafe.png?<?php echo $filemtime; ?>" >

                    </div>





 

          <div class="block1" style="background-color: white !important;">
          <h1 class="card-title">Land's End Tavern </h1>
                <h2 class="card-title"><?php echo $data['let']['meal']; ?>  <?php echo  date("m-d-Y") ;  ?> </h2>

               
                      <h2 class="card-title"><?php echo $data['let']['chef'];  ?> </h2>

                
                      <br><h4>Daily Specials</h4>

                      <h5 class="card-title">  <?php echo $data['let']['special_name'];  ?> </h5>

                      <p class="card-text">  <?php echo $data['let']['special_descr'];  ?> </p>

                     <br><br><h4><?php echo $data['let']['header'];  ?> </h4>

                      <h5 class="card-title"> <?php echo $data['let']['child_name'];  ?> </h5>

                      <p class="card-text">   <?php echo $data['let']['child_descr'];  ?> </p>
                  
                      <?php
// outputs e.g.  somefile.txt was last modified: December 29 2002 22:16:23.

        $filename = 'uploads/uploads/let.png';
        if (file_exists($filename)) {
            $filename = "uploads/uploads/let.png";
            $filemtime = filemtime($filename);
}
?>
                    <div class="col"> 
                   <img src="uploads/uploads/let.png?<?php echo $filemtime; ?>" >
</div>

                    </div>




             




   

   

                    <div class="block1" style="background-color: white !important;">
                    <h1 class="card-title">Salty Dog Bluffton </h1>
                    <h2 class="card-title"><?php echo $data['bluffdog']['meal']; ?>  <?php echo  date("m-d-Y") ;  ?> </h2>

                 

                      <h2 class="card-title"> <?php echo $data['bluffdog']['chef'];  ?> </h2>

                      <br><h4>Daily Specials</h4>

                      <h5 class="card-title"> <?php echo $data['bluffdog']['special_name'];  ?> </h5>

                      <p class="card-text">  <?php echo $data['bluffdog']['special_descr'];  ?> </p>

                     <br>

                     <h4> <?php echo $data['bluffdog']['header'];  ?> </h4>

                      <h5 class="card-title"> <?php echo $data['bluffdog']['child_name'];  ?> </h5>

                      <p class="card-text">   <?php echo $data['bluffdog']['child_descr'];  ?> </p>
                  
                      <?php
// outputs e.g.  somefile.txt was last modified: December 29 2002 22:16:23.

        $filename = 'uploads/uploads/bluffdog.png';
        if (file_exists($filename)) {
            $filename = "uploads/uploads/bluffdog.png";
            $filemtime = filemtime($filename);
}
?>
                    <div class="col"> 
                   <img src="uploads/uploads/bluffdog.png?<?php echo $filemtime; ?>" >
</div>

                    </div>









 

  






   

                    <div class="block1" style="background-color: white !important;">
                    <h1 class="card-title">The Wreck of the Salty Dog </h1>
                          <h2 class="card-title"><?php echo $data['wreck']['meal']; ?>  <?php echo  date("m-d-Y") ;  ?>  </h2>


                      <h2 class="card-title"> <?php echo $data['wreck']['chef'];  ?> </h2>

                    

                      <br><h4>Daily Specials</h4>

                      <h5 class="card-title">  <?php echo $data['wreck']['special_name'];  ?> </h5>

                      <p class="card-text">  <?php echo $data['wreck']['special_descr'];  ?> </p>

                     <br><br><h4><?php echo $data['wreck']['header'];  ?> </h4>

                      <h5 class="card-title"> <?php echo $data['wreck']['child_name'];  ?> </h5>

                      <p class="card-text">  <?php echo $data['wreck']['child_descr'];  ?></p> 

                      <?php
// outputs e.g.  somefile.txt was last modified: December 29 2002 22:16:23.

        $filename = 'uploads/uploads/wreck.png';         if (file_exists($filename)) {
           $filename = "uploads/uploads/wreck.png";
            $filemtime = filemtime($filename);
}

 

 ?>
                   
           
                    <p class="card-text">      <img src="uploads/uploads/wreck.png?<?php echo $filemtime; ?>" >                   </div>  



       </div> 

    </div>











</body>



</html>