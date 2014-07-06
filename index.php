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
			<input type="input" name="num_words" id="num_words" onchange="validate_num(this)" />
			<input type="submit" />
		</form>
		</br>
		Password = <?php echo $result; ?>
	</body>
</html>