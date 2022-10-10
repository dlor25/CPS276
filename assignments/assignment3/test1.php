<?php

require "Calculator.php";
$Calculator = new Calculator();

@$number1 = $_GET["number1"];
@$number2 = $_GET["number2"];

?>

<!DOCTYPE html>
<form action="test1.php" method="get">

    Number One: <input type="text" name="number1">

    <br>

    Number Two: <input type="text" name="number2">
    <input type="submit" value="Submit">

</form>
</html>

<? 

if ($number1 != null || $number2 != null){
    echo $Calculator->calc("/", $number1, $number2);  //will output Cannot divide by zero
    echo $Calculator->calc("*", $number1, $number2);  //will output The product of the two numbers
    echo $Calculator->calc("/", $number1, $number2);  //will output The division of the two numbers
    echo $Calculator->calc("-", $number1, $number2);  //will output The difference of the two numbers
    echo $Calculator->calc("+", $number1, $number2);  //will output The sum of the two numbers
    echo $Calculator->calc("*", $number1);     //will output You must enter a string and two numbers
    echo $Calculator->calc($number1);          //will output You must enter a string and two numbers
};

?>