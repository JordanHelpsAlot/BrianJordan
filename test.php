<!doctype html>
<html>
	<head>
		<title> This is a test </title>
	</head>
	
	<body>
		<p> This is also a test, <a href="/index.php"> Link back to Abed </a> </p>
		<form method = "POST">
			<fieldset width="200" height="200">
			
				<input name="7" type="button" value="7" />
				<input name="8" type="button" value="8" />
				<input name="9" type="button" onclick="myFunction()" value="9" /><br>
				<input name="4" type="button" value="4" />
				<input name="5" type="button" value="5" />
				<input name="6" type="button" value="6" /><br>
				<input name="1" type="button" value="1" />
				<input name="2" type="button" value="2" />
				<input name="3" type="button" value="3" /><br>
				<input name="0" type="button" value="0" width="50" />

			</fieldset>
		</form>
			<?php
				for($i = 0; $i <10; $i++){
					
					$number = $i;
					echo $number;
					echo $_POST;
				}
				echo "$number";
				switch($number){
					case "1":
						echo "1";
						break;
					case "2":
						echo "1";
						break;
					case "3":
						echo "1";
						break;
					case "4":
						echo "1";
						break;
					case "5":
						echo "1";
						break;
					case "6":
						echo "1";
						break;
					case "7":
						echo "1";
						break;
					case "8":
						echo "1";
						break;
					case "9":
						echo "1";
						break;
					case "0":
						echo "0";
						break;
				}
				if(isset($_GET["9"])){
					$number = $number . "9";
					echo $number; 
					echo "<div>";
					echo "new number: $number";
				}
				
					
			?>
	
	</body>
</html>