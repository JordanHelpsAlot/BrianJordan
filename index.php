<?php
/*
	$adjective = "<3";
	echo "Abed is...";
	for ($i = 1; $i<9; $i++){
		echo "<div>".$i.": $adjective</div>";
	}
	echo "<div>For real.</div>";
	*/
?>

<!doctype html>
<html>
  <head>
    <title>Hey babe</title>
  </head>

  <body>
    <img src="abed_is_cool.jpg" style="width: 200px; margin-left: auto; margin-right: auto; display: inline;">
    <p>Hey Abed. This is your website. It will obey you.</p>
    <form action="index.php" method="POST">
	    <label for="wish">Enter Your Wishes</label>
	    <input name="wish" type="text" />
	</form>
	<div>
		<?php
			$wish = $_POST['wish'];
			echo "<div>$wish: Granted</div>";
		?>
	</div>
  </body>
</html>
