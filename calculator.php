<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Calculator </title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="GET">

	<input type="text" name="num1" placeholder="Number 1">
	<input type="text" name="num2" placeholder="Number 2">
	<select name="operator">

		<option> MIN </option>
		<option> PLUS </option>
		<option> KEER </option>
		<option> GEDEELT DOOR </option>

	</select>
	<br>
	<button type="submit" name="submit" value="Submit">Calculate</button>
	</form>

<?php

if(isset($_GET['submit'])) {
	$result1 = $_GET['num1'];
	$result2 = $_GET['num2'];
	$operator = $_GET['operator'];

	switch($operator) { 

		case "MIN": 
			$output = $result1 - $result2;
		break;

		case "PLUS": 
			$output = $result1 + $result2;
		break;

		case "KEER": 
			$output = $result1 * $result2;
		break;

		case "GEDEELT DOOR": 
			$output = $result1 / $result2;
		break;

	}
	
	echo "The output is: " . $output; 

if($output <= 0) {
	die($output);
}

}


?>

</body>
</html>
