<!doctype html>
<html>
	<head>
		<title> Calculator </title>
	</head>
	
	<body>
		<p> This is also a test, <a href="/index.php"> Link back to Abed </a> </p>
		
		<input type="button" id="num7" onclick="addNum1(7)" value=7>
		<input type="button" id="num8" onclick="addNum1(8)" value=8>
		<input type="button" id="num9" onclick="addNum1(9)" value=9>
		<input type="button" onclick="reset()" value="c"><br>
		<input type="button" id="num4" onclick="addNum1(4)" value=4>
		<input type="button" id="num5" onclick="addNum1(5)" value=5>
		<input type="button" id="num6" onclick="addNum1(6)" value=6>
		<input type="button" id="+" onclick="opClicked(00)" value="+"><br>
		<input type="button" id="num1" onclick="addNum1(1)" value=1>
		<input type="button" id="num2" onclick="addNum1(2)" value=2>
		<input type="button" id="num3" onclick="addNum1(3)" value=3>
		<input type="button" id="-" onclick="opClicked(01)" value="-"><br>
		<input type="button" id="num0" onclick="addNum1(0)" value=0>
		<input type="button" id="*" onclick="opClicked(10)" value="*">
		<input type="button" id="/" onclick="opClicked(11)" value="/">
		<input type="button" id="=" onclick="operate()" value="=">
		

		<p id="demo"></p>
		<p id="test"></p>
		<script>
			var num1 = "";
			var num2 = "";
			var fullString = "";
			var finalString = "";
			var isOpClicked = false;
			var hasTotaled = false;
			var op = "";
			function opClicked (code){
				if(!isOpClicked && num1 != ""){
					if(code == "00")
						op = document.getElementById("+").value;
					else if(code == "01")
						op = document.getElementById("-").value;
					else if(code == "10")
						op = document.getElementById("*").value;
					else
						op = document.getElementById("/").value;
					fullString = fullString + " " + op + " ";
					document.getElementById("demo").innerHTML = fullString;
					isOpClicked = true;
				
				}
			}
			function addNum1(digit){
				if(!isOpClicked){	
					fullString = fullString + digit;
					document.getElementById("demo").innerHTML = fullString;
					num1 = num1 + digit;
				}
				else if(!hasTotaled)+{
					fullString = fullString + digit;
					document.getElementById("demo").innerHTML = fullString;
					num2 = num2 + digit;
				}				
			}
			
			function operate(){
				if(num1 != ""){
					hasTotaled = true;
					if(op == "+"){
						var int1 = parseInt(num1);
						var int2 = parseInt(num2);
						document.getElementById("test").innerHTML = (int1 + int2);
						num1 = int1 + int2;
						num2 = "";
					}
					else if(op == "-"){
						var total = num1 - num2;
						document.getElementById("test").innerHTML = (num1 - num2);
						num1 = total;
						num2 = "";
					}
					else if(op == "*"){
						var total = num1 + num2;
						document.getElementById("test").innerHTML = (num1 * num2);
						num1 = total;
						num2 = "";
					}
					else{
						var total = num1 / num2;
						document.getElementById("test").innerHTML = (num1 / num2);
						num1 = total;
						num2 = "";
					}
					
				}
			}
			function reset(){
				num1 = "";
				num2 = "";
				fullString = "";
				finalString = "";
				isOpClicked = false;
				hasTotaled = false;
				op = "";
				document.getElementById("test").innerHTML = "";
				document.getElementById("demo").innerHTML = "";

			}				
		</script>

	</body>
</html>