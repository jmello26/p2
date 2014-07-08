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
				Number of Words (1-9):<input type="input" name="num_words" id="num_words" size="4" onchange="validate_num(this)" value="<?php echo $num_words ?>"></input><br/>
				<input type="checkbox" name="inc_number" id="inc_number" <?php echo ($inc_number == "on") ? "checked" : ""; ?> >Include a Number</input><br/>
				<input type="checkbox" name="inc_symbol" id="inc_symbol" <?php echo ($inc_symbol == "on") ? "checked" : ""; ?> >Include a Symbol</input><br/>
				<input type="radio" name="to_case" id="to_case" value="upper" <?php echo ($to_case == "upper") ? "checked" : ""; ?> >Uppercase</input>
				<input type="radio" name="to_case" id="to_case" value="lower" <?php echo ($to_case == "lower") ? "checked" : ""; ?> >Lowercase</input>
				<input type="radio" name="to_case" id="to_case" value="camel" <?php echo ($to_case == "camel") ? "checked" : ""; ?> >Camelcase</input><br/><br/>
				<input type="submit" id="submit_button" value="Get Password" /><br/>
				</br>
				<?php echo ($result != "") ? "Password = $result" : ""; ?>
			</div>
		</form>
	</body>
</html>