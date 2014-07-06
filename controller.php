<?php 

$num_words = $_POST['num_words'];
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