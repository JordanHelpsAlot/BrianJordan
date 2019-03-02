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
  	<div style="width:100%;">
	    <img src="abed_is_cool.jpg" style="width: 200px; margin-left: auto; margin-right: auto; display: inline;">
	    <p>Hey Abed. This is your website. It will obey you.</p>
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
	</div>
  </body>
</html>
