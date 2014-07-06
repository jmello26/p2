<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<title>Password Generator</title>
	
	<?php require 'controller.php'; ?>
	
	<script>
		function validate_num (id) {
			/* alert("1"); */
			var words = getElementById("num_words").value;
			alert(words);
			if (words >= 1 && words <= 9) {
				return;
			}
			else {
				alert("Please enter a number between 1 and 9!");
			}
		}
	</script>
	</head>
	
	<body>
		<h1>xkcd Password Generator</h1>
		<form action="index.php" method="POST">
			<input type="input" name="num_words" id="num_words" onchange="validate_num(this)" /><br/>
			<input type="checkbox" name="inc_number" id="inc_number">Include a number</input><br/>
			<input type="checkbox" name="inc_symbol" id="inc_symbol">Include a symbol</input><br/>
			<input type="radio" name="to_case" id="to_case" value="upper">All uppercase</input>
			<input type="radio" name="to_case" id="to_case" value="lower">All lowercase</input><br/>
			<input type="submit" /><br/>
		</form>
		</br>
		<span> Password = <?php echo $result; ?> </span>
	</body>
</html>