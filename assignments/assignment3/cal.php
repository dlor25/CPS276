<?php

class Calculator{
    public function calc($operator="null", $num1="null", $num2="null"){
        return "it works";
    }
}
$Calc = new Calculator();

echo $Calc->calc(10);

?>