<?php

#variables

$wordList = array("correct", "horse", "battery", "staple", "fang", "breakable", "propellant", "academy", "power", "animal", "search", "console",
"pavement", "ideal", "relearn", "challenge", "aversion", "fuzzy", "awakening", "fermentation", "beverage", "bottomless", "knowing", "silver",
"decent", "machine", "auction", "brand", "bite", "brick", "electric", "water", "deer", "already");
$wordCount = count($wordList);
$numberList = "0123456789";
$symbolList = "!@#$%^&*()<>";
$qtyWords = 4;
$errorMessage = "";
$addNumber = "";
$addSymbol = "";
$add_number = 0;
$add_symbol = 0;
$password = "";
$result = "";
$randomNumber = random($numberList);
$randomSymbol = random($symbolList);

#function to randomize the number and symbol strings

function random($string)
{

	$i = mt_rand(0, strlen($string)-1);
	return $string[$i];

}

#process input data

if(isset($_GET['quantity_of_words']) && !empty($_GET['quantity_of_words']))
{

	$qtyWords = $_GET['quantity_of_words'];

	if(!is_numeric($qtyWords))
	{

		$errorMessage = "Password reset. Only numbers are allowed.";
		$qtyWords = 4;

	}
	elseif ($qtyWords > 8 || $qtyWords < 4)
	{

		$errorMessage = "Password reset. Only an integer between 4 and 8 is allowed.";
		$qtyWords = 4;

	}

}

$randomize = array_rand($wordList, $qtyWords);
for($i = 0; $i < $qtyWords; $i++)
{
	$result = ($wordList[$randomize[$i]]);
	$password .= $result;
}

	$add_number = "";
    if ($add_number == 1)
    {
        $addNumber = $randomNumber;
    }

    $add_symbol = "";
    if ($add_symbol == 1)
    {
        $addSymbol = $randomSymbol;
    }


if(isset($_GET["add_number"]))
{
	$addNumber = random($numberList);
	$password .= $addNumber;
}

if(isset($_GET["add_symbol"]))
{
	$addSymbol = random($symbolList);
	$password .= $addSymbol;
}

if(isset($_GET["upper_case"]))
{
		$password = strtoupper($password);
}

?>
