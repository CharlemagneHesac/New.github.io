<?php

$temperature = $_GET["Temperature"];
$humidity= $_GET["Humidity"];


$text ="Temperature: {$temperature} C Humidity: {$humidity} %";

$admin_email 	= "pngchase@gmail.com";
$email 	= "chaseforgame@gmail.com";
$subject ="Temperature and Humidity Report";


//send email
mail($admin_email,"$subject",$text,"From:" .$email);

?>
