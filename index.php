<?php
	//Our Site
	//PHP Section, go crazy
	//BLACK&JACK PRODUCTIONS
    $page_name = "Home";
    include("navbar_template.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  	#main{
  		height: 100vh;
  	}
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<div id="main" class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-left"> 
		<h1> Abed's Wish Generator </h1>
	    <img src="abed_is_cool.jpg" style="width: 200px; margin-left: auto; margin-right: auto; display: inline;">
	    <p>Hey Abed. This is your website. It will obey you. <a href="/test.php"> Link Somewhere else</a></p>
	    <form action="index.php" method="POST">
		    <label for="wish">Enter Your Wishes</label>
		    <input name="wish" type="text" />
		</form>
		<div>
			<?php
				$wish = $_POST['wish'];
				if(!empty($wish)){
					echo "<div>";
					if($wish=="spank me"){
						echo "Your punishment will come when you least deserve it";
					}
					else{
						echo "$wish: Granted";
					}
					echo "</div>";
				}
			?>
		</div>
		<br>
		<strong><a href="roulette/index.php">Roulette</a></strong>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>AIDS</p>
      </div>
      <div class="well">
        <p>AIDS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>

</html>
