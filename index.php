<!doctype html>
<html>
  <head>
    <title>Hey babe</title>
  </head>

  <body>
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
  </body>
</html>
