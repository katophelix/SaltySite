<!DOCTYPE html>
<html lang="en">
  <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-9994729-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-9994729-1');
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Salty Dog Music Request Line</title>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
	 crossorigin="anonymous"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

     <style>
            .form-group {
                    width: 80%;
                    padding: 1px;
                   
                    box-sizing: border-box;
                    margin-top: 2px;
                    margin-bottom: 2px;
                    resize: vertical;
                }

            

                input[type=submit]:hover {
                    /* background-color: #45a049; */
                }

                .container {
                 
                    background-color: white;
                    padding: 2px;
                    color: black;
                    width: 80%;
text-align: center;
                }


             


                .container .card-img-top {

                    background-color: white !important
                }

               h1 {
font-size: 2em;
                    color: rgb(4, 4, 51) !important;
                }

                
                label {
font-size: 1em;
                    color: rgb(4, 4, 51) !important;
                }
            </style>

  <div class="container justify-content-center ">
  <div class="row justify-content-center" style="margin-top: 10px;">
      <div class="col justify-content-center">
        <h1>Salty Dog Song Request</h1>        
      </div>
    </div>

    <div class="row">
      <div class="col-10">
        <form action="add_song.php" method="post">
          <div class="form-group">
            <label for="song">Song Title</label>
            <input type="text" class="form-control" id="song" name="song" required>
          </div>
          <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="location">I am listening from...</label>
            <select class="form-control" id="location" name="location" required>
              <option value="1">The Cafe Deck</option>
              <option value="2">Live on the Internet</option>
            </select>
          </div>          

          <input type="submit" class="btn btn-default" value="Request Song (Limit 3)">
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-10">
        <p>Salty Dog receives numerous requests each night from listeners around the world. We ask that you please limit your requests to 3 per night.</p>

        <p>Please sign on to our free, open wireless network "WiFiDo" (the fastest free internet connection on the island) before you submit your request. Submitting your request while on the "WiFiDo" network ensures that the musician knows you are at the cafe. Thanks and enjoy the tunes!</p>

        <a href="http://cruise.saltydog.com/"><p>Salty Dog Happy Hour Cruise<br>
        Click here to view schedule and book your tickets online.</a></p>

      </div>
    </div>

  </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>