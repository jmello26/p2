<?php 

//print_r( $_POST);
$num_words = $_POST['num_words'];
$inc_symbol = $_POST['inc_symbol'];
$inc_number = $_POST['inc_number'];
$to_case = $_POST['to_case'];
$result = "";

$dictionary = array("cat", "dog", "horse", "rabbit", "koala", "elephant", "sloth", "jaguar", "raccoon", "turtle", "lion");
$numbers = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
$symbols = array("!", "@", "#", "$", "%", "^", "&", "*", "+", "~",);

for ($i = 0; $i < $num_words; $i++) {
	$word = $dictionary[rand(0, count($dictionary)-1)];
	if ($i == 0) {
		$result = $word;
	}
	else {
		$result = $result . "-" . $word;
	}
}

if ($to_case == "upper"){
	$result = strtoupper($result);
}
else if ($to_case == "lower") {
	$result = strtolower($result);
}

if($inc_number == "on") {
	$result = $result . $numbers[rand(0,9)];
}

if ($inc_symbol == "on") {
	$result = $result . $symbols[rand(0,9)];
}