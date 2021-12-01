<?php

$pass = array("Bob", "Sara", "Mario", 1, 3.5);	//array

print_r($pass);
var_dump($pass);//var_dump is used to return the data type

//ForEACH Loop
$array = array( 1, 2, 3, 4, 5);     
foreach( $array as $value ) {
   echo "<br>Value is $value <br />";
}


//Display random value from an array
$a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
print("</br>");
print_r(array_rand($a)); // returns one value
print("</br>");
print_r(array_rand($a,2)); // returns one value

?>
