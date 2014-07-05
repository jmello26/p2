<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<title>Password Generator</title>
	<?php require 'controller.php'; ?>
	</head>
	<body>
		<h1>xkcd Password Generator</h1>
		<form action="index.php" method="POST">
			<input type="input" name="num_words" />
			<input type="submit" />
		</form>
		</br>
		Password = <?php echo $result; ?>
	</body>
</html>