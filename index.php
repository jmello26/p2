<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<title>Password Generator</title>
	
	<?php require 'controller.php'; ?>
	
	<script>
		function validate_num (id) {
			var numwords = document.getElementById("num_words").value;
			var subButton = document.getElementById("submit_button");
			
			if (numwords >= 1 && numwords <= 9) {
				subButton.disabled = false;
			}
			else {
				alert("Enter a number between 1 and 9!");
				subButton.disabled = true;
			}
			return;
		}
	</script>
	</head>
	
	<body>
		<form action="index.php" method="POST">
			<div style="text-align:center; width:100%; font-size:20pt">
				<h1>xkcd Password Generator</h1>
				Number of Words:<input type="input" name="num_words" id="num_words" size="4" onchange="validate_num(this)" ></input><br/>
				<input type="checkbox" name="inc_number" id="inc_number">Include a Number</input><br/>
				<input type="checkbox" name="inc_symbol" id="inc_symbol">Include a Symbol</input><br/>
				<input type="radio" name="to_case" id="to_case" value="upper">All Uppercase</input>
				<input type="radio" name="to_case" id="to_case" value="lower">All Lowercase</input><br/>
				<input type="submit" id="submit_button" disabled="true" /><br/>
				</br>
				<?php if($result != "") { echo "Password = $result"; } ?>
			</div>
		</form>
	</body>
</html>