<?php 

//print_r( $_POST);
$num_words = $_POST['num_words'];
$inc_symbol = $_POST['inc_symbol'];
$inc_number = $_POST['inc_number'];
$to_case = $_POST['to_case'];
$result = "";

// dictionary of 100 random words (taken from https://sites.google.com/site/thissiteistotallyrandom/100-random-words)
$dictionary = array("sausage","blubber","pencil","cloud","moon","water","computer","school","network","hammer","walking","violently","mediocre","literature",
"chair","two","window","cords","musical","zebra","xylophone","penguin","home","dog","final","ink","teacher","fun","website","banana","uncle","softly","mega",
"ten","awesome","attach","blue","internet","bottle","tight","zone","tomato","prison","hydro","cleaning","television","send","frog","cup","book","zooming",
"falling","evilly","gamer","lid","juice","moniter","captain","bonding","loudly","thudding","guitar","shaving","hair","soccer","water","racket","table","late",
"media","desktop","flipper","club","flying","smooth","monster","purple","guardian","bold","hyperlink","presentation","world","national","comment","element",
"magic","lion","sand","crust","toast","jam","hunter","forest","foraging","silently","joshing","pong");

$numbers = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
$symbols = array("!", "@", "#", "$", "%", "^", "&", "*", "+", "~",);

for ($i = 0; $i < $num_words; $i++) {
	$word = $dictionary[rand(0, count($dictionary)-1)];
	if ($i == 0) {
		$result = $word;	// special handling for the first word
	}
	else {
		$result = $result . " " . $word;	// separate the words with a space character
	}
}

if ($to_case == "upper"){
	$result = strtoupper($result);	// uppercase the result
}
else if ($to_case == "lower") {
	$result = strtolower($result);	// lowercase the result
}
else if ($to_case == "camel") {
	$result = ucwords($result);		// camelcase the result
}

if($inc_number == "on") {
	$result = $result . " " . $numbers[rand(0, count($numbers)-1)];
}

if ($inc_symbol == "on") {
	$result = $result . " " . $symbols[rand(0, count($symbols)-1)];
}