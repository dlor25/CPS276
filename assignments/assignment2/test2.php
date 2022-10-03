<?php

/*This is a multi-
line comment for PHP. */

$string = "Megaman";
function myFunction(){
$string = "Hub<br>"; //This is a single line comment for PHP. <br> is a new line. It must be in quotations.
echo $string;
}
myFunction(); //Outputs Hub *with new line*
echo $string; //Outputs Megaman

?>