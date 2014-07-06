<?php 

//print_r( $_POST);
$num_words = $_POST['num_words'];
$inc_symbol = $_POST['inc_symbol'];
$inc_number = $_POST['inc_number'];
$to_case = $_POST['to_case'];
$result = "";

$dictionary = Array("cat", "dog", "horse", "rabbit", "koala", "elephant", "sloth", "jaguar", "raccoon", "turtle", "lion");

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
	$result = $result . "-@";
}

if ($inc_symbol == "on") {
	$result = $result . "-4";
}