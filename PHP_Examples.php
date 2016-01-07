<?php

//Joel Benoit
//A00838629	
/*<html>
	<head>
		<title>
		Assignment1bJoelBenoit
		</title>		
	</head>
	<body>*/
//1
	$displayMessage = "Welcome to lab #1b";
	echo $displayMessage;
//2	
	const UNLUCKY_NUMBER = 5;
	echo "<p>UNLUCKY_NUMBER</p>";
//3	
$number = 10;
if ($number % 2 == 0) {
  print "<p>It's even</p>";
} 
if ($number % 1 == 0) {
  print "<p>It's odd</p>";
}
//4 
$time = date("d");
    $timezone = date("e");
    /* If the time is less than 1200 hours, show good morning */
    if ($time < "12") {
        echo "<p>Good morning</p>";
    } 
    /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
    if ($time >= "12" && $time < "24") {
        echo "<p>Good afternoon</p>";
	}
//5	
	echo date("<p>l, F j</p>");
//6	

function evenNumber($number){
	if($number % 2 == 0){
		return true;
	}else{
		return false;
	}
}


for($index = $time; $index >= 0; $index--){
		if($index == UNLUCKY_NUMBER){
			continue;
		}
		echo "<p>$index</p>";
}

if($time == UNLUCKY_NUMBER){
	echo "<p> Its not your luckyy day</p>";	
}else if(evenNumber($time)){
	echo "<p> Its your lucky day</p>";
}else{
	echo"<p> just a regular day</p>";
}

?>